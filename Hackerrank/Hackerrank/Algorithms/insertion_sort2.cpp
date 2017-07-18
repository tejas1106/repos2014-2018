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
    int temp,j;
    for(int i=1;i<n;i++)
    {
        temp = a[i];
        for(j=i-1;j>=0 && temp<a[j];j--)
        {
            a[j+1]=a[j];
        }
        a[j+1]=temp;
    }
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
