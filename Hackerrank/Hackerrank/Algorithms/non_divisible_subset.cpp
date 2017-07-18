#include<iostream>
using namespace std;
int main()
{
    int n,k,temp;
    cin>>n>>k;
    int a[100]={0};
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        a[temp%k]++;
    }
    int count=0;
    for(int i=0;i<=k/2;i++)
    {
        if(i==0 || (i==k/2 && k%2==0))
        {
            if(a[i]>0)
            {
                count++;
            }
        }
        else
        {
            if(a[i]>a[k-i])
            {
                count+=a[i];
            }
            else
            {
                count+=a[k-i];
            }
        }
    }
    cout<<count<<endl;
}
