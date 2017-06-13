/*author : #Tejas1106#
date : March 4,2016*/
#include<stdio.h>
#include<conio.h>
void ones_comp(char t[]);
void right_shift(char a[],char q[],char *q1);
void addition(char a[],char b[]);
void main()
{
	char a[5]="0000",q[5],m[5],q1='0',temp[5];
	int i;
	clrscr();
	printf("Enter 4-bit multiplicand : ");
	gets(m);
	printf("Enter 4-bit multiplier : ");
	gets(q);
	printf("\nInitial Step :");
	printf("\n%s  %s  %c  %s",a,q,q1,m);
	for(i=0;i<4;i++)
	{
		printf("\n\nStep %d : ",i+1);
		if(q[3]=='0' && q1=='1')
		{
			addition(a,m);
			printf("\n%s  %s  %c  %s",a,q,q1,m);
			printf("\ta<--a+m");
		}
		else if(q[3]=='1' && q1=='0')
		{
			strcpy(temp,m);
			ones_comp(temp);
			addition(temp,"0001");
			addition(a,temp);
			printf("\n%s  %s  %c  %s",a,q,q1,m);
			printf("\ta<--a-m");
		}
		right_shift(a,q,&q1);
		printf("\n%s  %s  %c  %s",a,q,q1,m);
		printf("\tRight Shift a,q,q1");
	}
	printf("\n\nAns : %s %s",a,q);
		getch();
}

void ones_comp(char t[])
{
	int i;
	for(i=3;i>=0;i--)
	{
		if(t[i]=='1')
		{
			t[i]='0';
		}
		else
		{
			t[i]='1';
		}
	}
}

void addition(char a[],char b[])
{
	int i=4;
	char var,temp='0';
	a[i]='\0';
	for(i=3;i>=0;i--)
	{
		var=a[i];
		a[i]=(var+b[i]+temp-3*'0')%2+'0';
		temp=(var+b[i]+temp-3*'0')/2+'0';
	}
}

void right_shift(char a[],char q[],char *q1)
{
	int i;
	*q1=q[3];
	for(i=3;i>=1;i--)
	{
		q[i]=q[i-1];
	}
	q[i]=a[3];
	for(i=3;i>=1;i--)
	{
		a[i]=a[i-1];
	}
}