#include<iostream>
using namespace std;
int main()
{
    int n,a[1000]={0},temp,sum=0,count=0;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        if(temp%2==1)
        {
            a[i]=1;
            sum+=a[i];
            count++;
        }
    }
    if(sum%2==1)
    {
        if(count==1)
        {
            cout<<"-1"<<endl;
        }
        else
        cout<<"1"<<endl;
    }
    else
    {
        cout<<"0"<<endl;
    }
    return 0;
}
