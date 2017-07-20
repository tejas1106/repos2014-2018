/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package datasttructures;

import java.util.Scanner;

/**
 *
 * @author Tejas
 */
public class Array_2D {
    
   
    public static int valueOfHourGlass(int a[][],int i,int j)
    {
        return (a[i][j]+a[i][j+1]+a[i][j+2]+a[i+1][j+1]+a[i+2][j]+a[i+2][j+1]+a[i+2][j+2]);
    }
    
    public static void main(String[] args)
    {
        int n = 6;
        int[][] a = new int[n][n];
        Scanner sc = new Scanner(System.in);
        for(int i=0;i<n;i++)
        {
            for(int j=0;j<n;j++)
            {
                a[i][j] = sc.nextInt();
            }
        }
        int max = Integer.MIN_VALUE;
        int x;
        for(int i=0;i<n-2;i++)
        {
            for(int j=0;j<n-2;j++)
            {   
                x=valueOfHourGlass(a, i, j);
                if(x>max)
                {
                    max=x;
                }
            }
        }
        System.out.println(max);
    }
}
