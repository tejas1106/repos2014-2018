#include<stdio.h>
#include<conio.h>
#include<math.h>
int convert_block(int value_in_byte,int block_size);
int convert_bits(int value);
void main()
{
	int mm,cm,w,tags_bits,cm_bits,w_bits,choice;
	clrscr();
	printf("Enter memory size in kb : ");
	scanf("%d",&mm);
	printf("Enter cache memory size in kb: ");
	scanf("%d",&cm);
	printf("Enter block size in words : ");
	scanf("%d",&w);
	printf("\nWhat do u want ?");
	printf("\n\t1.Direct Mapping\n\t2.Associative Mapping\n\t3.Set Associative Mapping\n");
	printf("Enter choice : ");
	scanf("%d",&choice);
	switch(choice)
	{
		case 1: tags_bits=convert_bits(convert_block(mm,w)/convert_block(cm,w));
			cm_bits=convert_bits(convert_block(cm,w));
			w_bits=convert_bits(w);
			printf("Address Structure using Direct Mapping : \n");
			printf("\tTags\tCache\tWords\n");
			printf("Bits : \t%d\t%d\t%d",tags_bits,cm_bits,w_bits);
			break;
		case 2: w_bits=convert_bits(w);
			tags_bits=convert_bits(convert_block(mm,w));
			printf("Address Structure using Associative Mapping : \n");
			printf("\tTags\tWords\n");
			printf("Bits : \t%d\t%d",tags_bits,w_bits);
			break;
		case 3:
			break;
		default :printf("Invalid Choice!!");

	}

	getch();
}

int convert_block(int value_in_kbyte,int block_size)
{
	return value_in_kbyte*(1024/block_size);
}

int convert_bits(int value)
{
	int i=0;
	while(value!=0)
	{
		if(value%2==0)
		{
			i++;
			value=value/2;
		}
		else
		{
			break;
		}
	}
	return i;
}