package java;

import java.util.Scanner;
import java.util.TreeSet;

public class ASG6Ac {
public static void main(String[] args)
{
TreeSet<String> tree_set = new TreeSet<String>();
Scanner sc=new Scanner(System.in);
System.out.println("How many element you want to add into TreeSetCollection ?");
int n=sc.nextInt();
for(int i=0;i<n; i++)
{
String dt=sc.next();
tree_set.add(dt);
}
System.out.println("Elements of Tree set are: ");
System.out.println(tree_set);
sc.close();
}
}