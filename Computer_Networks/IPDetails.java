
import java.util.Scanner;

/**
 *
 * @author Tejas1106
 */
public class IPDetails 
{
    String ip;
    int[] array;
    String defaultMask="",netID="",startAddress="",lastAddress="";
    String[] string;
    public void getInput()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter IP address : ");
        ip = sc.next();
        string=ip.split("\\.");
    }
    
    public boolean checkValidity()
    {
        boolean validated=true;
        if(string.length==4)
        {
            array = new int[4];
            for(int i=0;i<4;i++)
            {
                array[i]=Integer.parseInt(string[i]);
                if(array[i]<0 || array[i]>255)
                {
                    validated = false;
                    break;
                }
                if(!string[i].equals(Integer.toString(array[i])))
                {
                    validated = false;
                    break;
                }
            }
        }
        else 
        {
            validated=false;
        }
        return validated;
    }
    
    public char getIPClass(int[] array)
    {
        char classOfIP='0';
      
        if(array[0]>=0 && array[0]<=127 )
        {
            classOfIP = 'A';
            defaultMask = "255.0.0.0";
            netID = Integer.toString(array[0])+".0.0.0";
            startAddress = netID;
            lastAddress = Integer.toString(array[0])+"."+"255.255.255";
        }
        else
        if(array[0]>127 && array[0]<=191)
        {
            classOfIP = 'B';
            defaultMask = "255.255.0.0";
            netID = Integer.toString(array[0])+"."+Integer.toString(array[1])+".0.0";
            startAddress = netID;
            lastAddress = Integer.toString(array[0])+"."+Integer.toString(array[1])+".255.255";
        }
        else
        if(array[0]>191 && array[0]<=223)
        {
            classOfIP = 'C';
            defaultMask = "255.255.255.0";
            netID = Integer.toString(array[0])+"."+Integer.toString(array[1])+"."+Integer.toString(array[3])+".0";
            startAddress = netID;
            lastAddress = Integer.toString(array[0])+"."+Integer.toString(array[1])+"."+Integer.toString(array[3])+".255";
        }
        else
        if(array[0]>223 && array[0]<=239)
        {
            classOfIP = 'D';
            defaultMask ="";
        }
        else
        if(array[0]>239 && array[0]<256)
        {
            classOfIP = 'E';
            defaultMask = "";
        }
    return classOfIP;
    }
    
    public void process()
    {
        getInput();
        if(checkValidity())
        {
            char IPClass = getIPClass(array);
            System.out.println("IPClass : "+IPClass);
            if(IPClass=='A' || IPClass=='B' || IPClass=='C')
            {
            System.out.println("Default Mask : "+defaultMask);
            System.out.println("Net ID : "+netID);
            System.out.println("Start Address : "+startAddress);
            System.out.println("End Address : "+lastAddress);
           }
        }
        else
        {
            System.out.println("Invalid!");
        }
    }
    
    public static void main(String[] args)
    {
        IPDetails object = new IPDetails();
        object.process();
    }
}

