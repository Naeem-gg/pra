package java;

import java.util.*;
import java.io.*;

class ASG6Ba {
    public static void main(String[] args) throws Exception {
       Scanner sc = new Scanner(System.in);
        Set s = new TreeSet();
        System.out.print("Enter no.of integers:");
        int n = sc.nextInt();
        for (int i = 0; i < n; i++) {
            System.out.print("Enter number:");
            int x = sc.nextInt();
            s.add(x);
        }
        Iterator itr = s.iterator();
        while (itr.hasNext()) {
            System.out.println(itr.next());
        }
        System.out.print("Enter element to be searched:");
        int no = sc.nextInt();
        if (s.contains(no))
            System.out.println("Number " + no + " found.");
        else
            System.out.println("Number " + no + " not found.");
    }
}