#include<iostream>
using namespace std;
int main()
{
    int a[5]={1,2,3,4,5};
    int n;
    int (*ptr)(int[],int);
    int sum(int a[],int);
    ptr = &sum;
    int sum1=(*ptr)(a,5);
    cout<<"Sum = "<<sum1;
}

int sum(int a[],int n)
{
    int s=0;
    for(int i=0;i<n;i++)
    {
        s+=a[i];
    }
    return s;
}
