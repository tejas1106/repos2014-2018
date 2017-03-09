#include <sys/ipc.h>
#include <sys/types.h>
#include <sys/msg.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

#define CENTRAL_MAILBOX 1200    //Central Mailbox number

struct 
{
	long priority;       //message priority
	int temp;            //temperature
	int pid;             //process id
	int stable;          //boolean for temperature stability
} msgp, inbox;




int main(int argc, char *argv[]) {

if(argc != 3) 
{
	printf("USAGE: Too few arguments --./central.out Temp UID");
	exit(0);
}   

int unstable = 1;
int result, length, status;
int initTemp = atoi(argv[1]);
int uid = atoi(argv[2]);

//Create the Central Servers Mailbox
int msqidC = msgget(CENTRAL_MAILBOX, 0600 | IPC_CREAT);

//Create the mailbox for this process and store it's IDs
int msqid = msgget((CENTRAL_MAILBOX + uid), 0600 | IPC_CREAT);

//Initialize the message to be sent
inbox.priority = 1;
inbox.pid = uid;
inbox.temp = initTemp;
inbox.stable = 1;

length = sizeof(msgp) - sizeof(long);

//While all the processes have different temps
while(unstable == 1)
{
//Send the current temp to the central server
	result = msgsnd( msqidC, &inbox, length, 0);

//Wait for a new message from the central server
	result = msgrcv( msqid, &msgp, length, 1, 0);

/*if processes temp same break loop else calculate newtemp Galvin page 148*/
	if(msgp.stable == 0) 
	{
		unstable = 0;
		printf("\nProcess %d Temp (stable) : %d\n", inbox.pid, inbox.temp);
	}
	else 
	{ 
		int newTemp = (inbox.temp * 3 + 2 * msgp.temp) / 5;
		inbox.temp = newTemp;
		printf("\nProcess %d Temp : %d\n", inbox.pid, inbox.temp);
	}
}

//Remove the mailbox
status = msgctl(msqid, IPC_RMID, 0);

//Check error while removing mailbox
if(status != 0)
{
	printf("\nERROR closing mailbox\n");
}
}