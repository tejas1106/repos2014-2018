/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package datasttructures;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

/**
 *
 * @author Tejas
 */
public class AlgorithmicCrush {
    public static void main(String[] args)
    {
        
        int n,m;
        Scanner sc = new Scanner(System.in);
        n = sc.nextInt();
        ArrayList<Integer> a = new ArrayList(n);
        m = sc.nextInt();
        for(int i=0;i<n;i++)
        {
            a.add(0);
        }
        int b,c,value;
        int temp;
        for(int i=0;i<m;i++)
        {
            b = sc.nextInt();
            c = sc.nextInt();
            value = sc.nextInt();
            for(int j=b-1;j<=c-1;j++)
            {
                temp = (int)a.get(j);
                a.remove(j);
                a.add(j,temp+value);        
            }
        }
        System.out.println(a);
        System.out.println(Collections.max(a).toString());
    }
}
