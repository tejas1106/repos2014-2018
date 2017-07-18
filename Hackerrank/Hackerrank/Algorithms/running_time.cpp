#include<iostream>
using namespace std;
void display(int[],int);
int main()
{
    int n,a[1000],count=0;
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
            count++;
        }
        a[j+1]=temp;
    }
    cout<<count<<endl;
    return 0;
}


