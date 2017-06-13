/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package computernetworks;

import java.util.Scanner;

/**
 *
 * @author Tejas1106
 */
public class CheckSum {
    int dataLength;
    int noOfDataSegments;
    int[][] dataSegments;
    int[] checkSumCode;
    int[] addedSegment;
    
    public void getDataSegmentDetails()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter no. of bits in data segment: ");
        dataLength = sc.nextInt();
        System.out.print("Enter no. of data segments : ");
        noOfDataSegments = sc.nextInt();
    }
    
    public void getDataSegments(int dataLength,int noOfDataSegments)
    {
        dataSegments = new int[noOfDataSegments][dataLength];
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter data Segments : ");
        for(int i=0;i<noOfDataSegments;i++)
        {
            System.out.print("Segment "+(i+1)+" : ");
            for(int j=0;j<dataLength;j++)
            {
                dataSegments[i][j] = sc.nextInt();
            }
        }
    }
    
    public int[] addTwoDataSegments(int dataLength,int[] firstSegment,int[] secondSegment)
    {
        int[] totalSum = new int[dataLength];
        int carry = 0,temp=0,sum = 0;
        for(int i = dataLength-1;i>=0;i--)
        {
            temp = carry;
            totalSum[i] = (temp+firstSegment[i]+secondSegment[i])%2;
            carry = (temp+firstSegment[i]+secondSegment[i])/2;
        }
        
        if(carry!=0)
        {
            for(int i = dataLength-1;i>=0;i--)
            {
                temp = carry;
                sum = totalSum[i];
                totalSum[i]=(sum+temp)%2;
                carry =(sum+temp)/2;
            }
        }
        return totalSum;
    }
    
    public int[] addNoOfSegments(int dataLength,int noOfSegments)
    {
        int[] sumSegment = new int[dataLength];
        sumSegment = dataSegments[0];
        for(int i=0;i<noOfSegments-1;i++)
        {
            sumSegment = addTwoDataSegments(dataLength,sumSegment,dataSegments[i+1]);
        }
        
        return sumSegment;
    }
    
    public int[] onesComplement(int dataLength,int[] segment)
    {
        int[] onesComplementSegment = new int[dataLength];
        for(int i = 0;i<dataLength;i++)
        {
            if(segment[i]==0)
            {
                onesComplementSegment[i]=1;
            }
            else
            {
                onesComplementSegment[i]=0;
            }
        }
        return onesComplementSegment;
    }
    
    public void displaySegment(int dataLength,int[] segment)
    {
        for(int i=0;i<dataLength;i++)
        {
            System.out.print(segment[i]+" ");
        }
        System.out.println();
    }
    
    public void displaySegmentsOfArray(int dataLength,int noOfDataSegments)
    {
        for(int i=0;i<noOfDataSegments;i++)
        {
            displaySegment(dataLength,dataSegments[i]);
        }
    }
    
    public boolean checkSegment(int dataLength,int[] segment)
    {
        boolean flag = true;
        for(int i=0;i<dataLength;i++)
        {
            if(segment[i]==1)
            {
                flag = false;
                break;
            }
        }
        return flag;
    }
    
    public void sender()
    {
        System.out.println("Sender's Side : \n");
        getDataSegmentDetails();
        getDataSegments(dataLength, noOfDataSegments);
        System.out.println("------------------------------------------------------");
        System.out.println("Data Segments entered by user : ");
        displaySegmentsOfArray(dataLength, noOfDataSegments);
        System.out.println("------------------------------------------------------\n");
        System.out.print("Addition of Segments     : ");
        addedSegment = new int[dataLength];
        addedSegment = addNoOfSegments(dataLength, noOfDataSegments);
        displaySegment(dataLength, addedSegment);
        System.out.print("Calculated checksum code : ");
        checkSumCode = new int[dataLength];
        checkSumCode = onesComplement(dataLength, addedSegment);
        displaySegment(dataLength, checkSumCode);
    }
    
    public void receiver()
    {
        System.out.println("-----------------------------------------------------------");
        System.out.println("-----------------------------------------------------------");
        System.out.println("\nReceiver's Side : \n");
        getDataSegments(dataLength, noOfDataSegments);
        System.out.print("The checksum code received : ");
        displaySegment(dataLength, checkSumCode);
        System.out.println("------------------------------------------------------");
        System.out.println("Data Segments and checksum code received by user : ");
        displaySegmentsOfArray(dataLength, noOfDataSegments);
        displaySegment(dataLength, checkSumCode);
        System.out.println("------------------------------------------------------\n");
        System.out.print("Addtion of Segments and checksum code : ");
        addedSegment = addTwoDataSegments(dataLength,addNoOfSegments(dataLength, noOfDataSegments),checkSumCode);
        displaySegment(dataLength, addedSegment);
        System.out.print("After one's Complement : ");
        displaySegment(dataLength, onesComplement(dataLength, addedSegment));
        if(checkSegment(dataLength, onesComplement(dataLength, addedSegment)))
        {
            System.out.println("NO ERROR.");
        }
        else
        {
            System.out.println("ERROR!!");
        }
    }
    
    public void myProcess()
    {
        sender();
        receiver();
    }
    
    public static void main(String [] args)
    {
        CheckSum object = new CheckSum();
        object.myProcess();
    }
}
