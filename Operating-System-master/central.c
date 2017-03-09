#include <sys/ipc.h>
#include <sys/types.h>
#include <sys/msg.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

#define CENTRAL_MAILBOX 1200     //Central Mailbox number 
#define NUM_PROCESSES 4          //Total number of external processes

struct {
long priority;          //message priority
int temp;             	//temperature
int pid;                //process id
int stable;             //temperature stable or not
} msgp, inbox;



int main(int argc, char *argv[]) {

if(argc != 2) 
{
	printf("ERROR : Too few arguments for ./central");
	exit(0);
}

printf("\nStarting Server...\n");

int i,result,length,status;             //counter for loops
int uid = 0;                            //central process ID
int initTemp = atoi(argv[1]);           //starting temperature
int msqid[NUM_PROCESSES];               //mailbox IDs for all processes
int unstable = 1;                       //check process stable or not
int tempAry[NUM_PROCESSES];             //array of process temperatures

//Create the Central Servers Mailbox
int msqidC = msgget(CENTRAL_MAILBOX, 0600 | IPC_CREAT);

//Create the mailboxes for the other processes and store their IDs
for(i = 1; i <= NUM_PROCESSES; i++)
{
	msqid[(i-1)] = msgget((CENTRAL_MAILBOX + i), 0600 | IPC_CREAT);
}

//Initialize the message to be sent
msgp.priority = 1;
msgp.pid = uid;
msgp.temp = initTemp;
msgp.stable = 1;

length = sizeof(msgp) - sizeof(long);

//While the processes have different temperatures
while(unstable == 1)
{
	int sumTemp = 0;        //sum up the temps as we loop
	int stable = 1;            //stability trap

// Get new messages from the processes
	for(i = 0; i < NUM_PROCESSES; i++)
	{
		result = msgrcv( msqidC, &inbox, length, 1, 0);

/*if new temp different than old temp then unstable set current pid temp = new temp*/
	if(tempAry[(inbox.pid - 1)] != inbox.temp) 
	{
		stable = 0;
	    	tempAry[(inbox.pid - 1)] = inbox.temp;
	}

//summation required for temperature algorithm in Galvin page 148
	sumTemp += inbox.temp;
	}


	if(stable)
	{
		printf("\nTemperature Stabilized: %d\n", msgp.temp);
		unstable = 0;
		msgp.stable = 0;
	}
	else 
	{ 
		int newTemp = (2 * msgp.temp + sumTemp) / 6;
		msgp.temp = newTemp;
	}
//calculate newTemp to set the temp field in the msgp

/* Send a new message to all processes to inform of new temp or stability */
	for(i = 0; i < NUM_PROCESSES; i++)
	{
		result = msgsnd( msqid[i], &msgp, length, 0);
	}
}

//Remove the mailbox
status = msgctl(msqidC, IPC_RMID, 0);

//Validate nothing when wrong when trying to remove mailbox
if(status != 0)
{
	printf("\nERROR closing mailbox\n");
}
printf("\nShutting down Server...\n");
}