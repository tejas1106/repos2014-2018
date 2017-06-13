#include<iostream>
using namespace std;

int main()
{
    int n,d,m,counter=0,sum;
    int a[100];
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    cin>>d>>m;
    for(int i=0;i<=n-m;i++)
    {
        sum=0;
        for(int j=0;j<m;j++)
        {
            sum+=a[i+j];
        }
        if(sum==d)
        {
            counter++;
        }
    }
    cout<<counter<<endl;
}
