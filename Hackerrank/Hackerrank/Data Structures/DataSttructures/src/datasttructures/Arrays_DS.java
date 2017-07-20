/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package datasttructures;

/**
 *
 * @author Tejas
 */
import java.io.*;
import java.util.*;

public class Arrays_DS {

    public static void main(String[] args) {
        int[] a = new int[1000];
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        for(int i=0;i<n;i++)
        {
            a[i] = sc.nextInt();
        }
        for(int i=n-1;i>=0;i--)
        {
            System.out.print(a[i]+" ");
        }
    }
}