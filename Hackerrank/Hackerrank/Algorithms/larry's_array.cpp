#include<iostream>
using namespace std;
int main()
{
    int t,n,inversion_count;
    cin>>t;
    while(t--)
    {
        cin>>n;
        inversion_count=0;
        int a[n];
        for(int i=0;i<n;i++)
        {
            cin>>a[i];
        }
        for(int i=0;i<n;i++)
        {
            for(int j=i+1;j<n;j++)
            {
                if(a[i]>a[j])
                {
                    inversion_count++;
                }
            }
        }
        if(inversion_count%2==0)
        {
            cout<<"YES"<<endl;
        }
        else
        {
            cout<<"NO"<<endl;
        }
    }
}
