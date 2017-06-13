/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package computernetworks;

import java.util.ArrayList;
import java.util.Scanner;

/*
 * @author Tejas1106
 */
public class HammingCode 
{
    int dataLength;
    int[] data;
    int parityBitsLength;
    ArrayList arrayList,receivedArrayList,position;
    int[] receivedData;
    
    public void getInput()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter no. of data bits          : ");
        dataLength = sc.nextInt();
    }
    
    public void getInputData(int[] data)
    {
        Scanner sc = new Scanner(System.in);
        for(int i = 0;i<dataLength;i++)
        {
            data[i] = sc.nextInt();
        }
    }
    
    public void getArrayList(int[] data,ArrayList arrayList)         
    {
        int k = 0;
        parityBitsLength = 0;
        for(int i=0;i<data.length;i++)
        {
            if(checkPosition(parityBitsLength)==k)
            {
                do
                {
                    arrayList.add(k,0);
                    k++;
                    parityBitsLength++;
                }while(checkPosition(k)==k);
            }
            if(checkPosition(parityBitsLength)!=k)
            {
                arrayList.add(k, data[i]);
                k++;
            }
        }
    }
    
    public ArrayList getParityCheckPositionArrayList(int k,int sizeOfArrayList)
    {
        ArrayList tempArrayList = new ArrayList();
        int m = 0;
        int j;
        int s=k-1;
        while(s<sizeOfArrayList)
        {
            for(j=0;j<k;j++)
            {
                if(s+j<sizeOfArrayList)
                {
                    tempArrayList.add(m,s+j);
                    m++;
                }
            }
            s+=2*k;
        }
        return tempArrayList;
    }
    
    public int checkPosition(int k)
    {
        return (int)(Math.pow(2, k)-1);
    }
    
    public void displayArrayList(ArrayList arrayList)
    {
        for(int i = 0;i<arrayList.size();i++)
        {
            System.out.print(arrayList.get(i)+" ");
        }
        System.out.println();
    }
    
    public void getParityBits(int k,ArrayList arrayList)
    {
        ArrayList tempArrayList;
        
        for(int i=0;(int)Math.pow(2, i)<k;i++)
        {
            int counter =0;
            tempArrayList=getParityCheckPositionArrayList((int )Math.pow(2, i), arrayList.size());
            for(int m=0;m<tempArrayList.size();m++)
            {
                if((int)arrayList.get((int)tempArrayList.get(m))==1)
                {
                    counter++;
                }
            }
            if(counter%2==1)
            {
                arrayList.remove((int)Math.pow(2, i)-1);
                arrayList.add((int)Math.pow(2, i)-1,1);
                
            }
        }
    }
    
    public void setParityBitsToReceivedData(int k)
    {
        for(int i=0;(int)Math.pow(2, i)<k;i++)
        {
            receivedArrayList.remove((int)Math.pow(2, i)-1);
            receivedArrayList.add((int)Math.pow(2, i)-1,(int)arrayList.get((int)Math.pow(2,i)-1));
        }
    }
    
    public void resetParityBitsToReceivedData(int k)
    {
        for(int i=0;(int)Math.pow(2, i)<k;i++)
        {
            receivedArrayList.remove((int)Math.pow(2, i)-1);
            receivedArrayList.add((int)Math.pow(2, i)-1,0);
        }
    }
    
    public int getErrorPosition(int k)
    {
        for(int i=0;(int)Math.pow(2, i)<k;i++)
        {
            if((int)arrayList.get((int)Math.pow(2, i)-1)!=(int)receivedArrayList.get((int)Math.pow(2, i)-1))
            {
                position.add(1);
            }
            else
            {
                position.add(0);
            }
        }
        int sum = 0;
        for(int i=0;i<position.size();i++)
        {
            if((int)position.get(i)==1)
            {
                sum += (int)Math.pow(2, i);
            }
        }
        return sum;
    }
    
    public void sender()
    {
        System.out.println("Sender's Side : \n");
        getInput();
        System.out.print("Enter data bits                 : ");
        data = new int[dataLength];
        getInputData(data);
        arrayList = new ArrayList();
        getArrayList(data,arrayList);
        getParityBits(arrayList.size(),arrayList);
        System.out.print("Data sended by sender           : ");
        displayArrayList(arrayList);
    }
    
    public void receiver()
    {
        System.out.println("\n\nReceiver's Side : \n");
        receivedData = new int[dataLength];
        System.out.print("Data received                   : ");
        getInputData(receivedData);
        receivedArrayList = new ArrayList();
        getArrayList(receivedData,receivedArrayList);
        setParityBitsToReceivedData(receivedArrayList.size());
        System.out.print("Bits received by receiver       : ");
        displayArrayList(receivedArrayList);
        resetParityBitsToReceivedData(receivedArrayList.size());
        getParityBits(receivedArrayList.size(),receivedArrayList);
        position = new ArrayList();
        int i=getErrorPosition(arrayList.size());
        if(i>0)
        {
        System.out.println("ERROR!!");
        System.out.print("Error position in Received Code : "+i+"\n");
        resetParityBitsToReceivedData(receivedArrayList.size());
        int j=(int) arrayList.remove(i-1);
        int k;
        if(j==1)
            k=0;
        else
            k=1;
        arrayList.add(i-1,k);
        setParityBitsToReceivedData(receivedArrayList.size());
        System.out.print("Corrected Code                  : ");
        displayArrayList(receivedArrayList);
        }
        else
        {
            System.out.println("NO ERROR.");
        }
    }
    
    public void myProcess()
    {
        sender();
        receiver();
    }
    
    public static void main(String [] args)
    {
        HammingCode hammingCode = new HammingCode();
        hammingCode.myProcess();
    }
}
