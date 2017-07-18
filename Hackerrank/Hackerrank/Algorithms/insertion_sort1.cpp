#include<iostream>
using namespace std;
void display(int[],int);
int main()
{
    int n,a[1000];
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    int temp = a[n-1];
    int i=n-2;
    while(temp<a[i] && i>=0)
    {
        a[i+1]=a[i];
        i--;
        display(a,n);
    }
    a[i+1]=temp;
    display(a,n);
    return 0;
}

void display(int a[],int n)
{
    for(int i=0;i<n;i++)
    {
        cout<<a[i]<<" ";
    }
    cout<<endl;
}
