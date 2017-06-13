/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package computernetworks;

import java.util.Scanner;

/*
 * @author Tejas1106
 */
public class CyclicRedundancyCheck {
    
    int dataLength;
    int[] data;
    int divisorBitsLength;
    int[] divisorBits;
    int[] remainderArray;
    
    public void getInputDetails()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter no. of data bits    : ");
        dataLength = sc.nextInt();
        System.out.print("Enter no. of divisor bits : ");
        divisorBitsLength = sc.nextInt();
    }
    
    public void getDataInput()
    {
        System.out.print("Enter data bits           : ");
        data = new int[dataLength+divisorBitsLength-1];
        getArray(data, dataLength);
    }
    
    public void getDivisorInput()
    {
        System.out.print("Enter divisor bits        : ");
        divisorBits = new int[divisorBitsLength];
        getArray(divisorBits, divisorBitsLength);
    }
    
    public void getArray(int[] array,int length)
    {
        Scanner sc = new Scanner(System.in);
        for(int i = 0;i<length;i++)
        {
            array[i] = sc.nextInt();
        }
    }
    
    public int xOrOperation(int a,int b)
    {
        if(a==b)
            return 0;
        else
            return 1;
    }
    
    public void findRemainder()
    {
        for(int i=0;i<dataLength;i++)
        {
            if(remainderArray[i]!=0)
            {
                for(int j=i;j<i+divisorBitsLength;j++)
                {
                    remainderArray[j] = xOrOperation(remainderArray[j], divisorBits[j-i]);
                }
            }
        }
    }
    
    public void setCRCCode(int[] data, int[] remainderArray)
    {
        for(int i=dataLength;i<dataLength+divisorBitsLength-1;i++)
        {
            data[i] = remainderArray[i];
        }
    }
    
    public void display(int [] data,int dataLength)
    {
        for(int i = 0;i<dataLength;i++)
        {
            System.out.print(data[i]+" ");
        }
        System.out.println();
    }
    
    public boolean checkRemainder(int[] remainderArray,int dataLength,int divisorBitsLength)
    {
        boolean flag = true;
        for(int i=dataLength;i<dataLength+divisorBitsLength-1;i++)
        {
            if(remainderArray[i]==1)
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
        getInputDetails();
        getDataInput();
        for(int i=dataLength;i<dataLength+divisorBitsLength-1;i++)
        {
            data[i] = 0;
        }
        remainderArray = data.clone();
        getDivisorInput();
        System.out.print("Data after applying 0's   : ");
        display(data,dataLength+divisorBitsLength-1);
        findRemainder();
//        display(remainderArray, dataLength+divisorBitsLength-1 );
        System.out.print("Calculated CRC code       : ");
        setCRCCode(data,remainderArray);
        display(data,dataLength+divisorBitsLength-1);
    }

    public void receiver()
    {
        System.out.println("\nReceiver's Side : \n");
        getDataInput();
        System.out.print("CRC code received         : ");
        setCRCCode(data,remainderArray);
        display(data, dataLength+divisorBitsLength-1);
        remainderArray=data.clone();
        findRemainder();
        if(checkRemainder(remainderArray, dataLength, divisorBitsLength))
            System.out.println("NO ERROR.");
        else
            System.out.println("ERROR!!");
    }
    
    public void myProcess()
    {
        sender();
        System.out.println("------------------------------------------");
        System.out.println("------------------------------------------");
        receiver();
    }
    
    public static void main(String[] args)
    {
        CyclicRedundancyCheck object = new CyclicRedundancyCheck();
        object.myProcess();
    }
}
