/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package datasttructures;

import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author Tejas
 */
public class DynamicArray {
    public static void main(String[] args)
    {
        Scanner sc = new Scanner(System.in);
        int size = sc.nextInt();
        int query = sc.nextInt();
        ArrayList[] array = new ArrayList[size];
        for(int i=0;i<size;i++)
        {
            array[i] = new ArrayList<Integer>();
        }
        int queryType,x,y;
        int lastAnswer = 0,seq;
        for(int i=0;i<query;i++)
        {
            queryType = sc.nextInt();
            x = sc.nextInt();
            y = sc.nextInt();
            seq = (x^lastAnswer)%size;
            if(queryType == 1)
            {
                array[seq].add(y);
            }
            else
            {
                lastAnswer = (int) array[seq].get(y%array[seq].size());
                System.out.println(lastAnswer);            
            }
        }
        
    }
}
