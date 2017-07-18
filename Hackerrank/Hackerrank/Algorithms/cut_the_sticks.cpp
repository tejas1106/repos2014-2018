#include<iostream>
#include<algorithm>
using namespace std;
int a[2000];
int main()
{
    int n,count,temp;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    sort(a,a+n);
    for(int i=0;i<n;i++)
    {
        count=0;
        if(a[i]!=0)
        {
            temp = a[i];
            for(int j=i;j<n;j++)
            {
                count++;
                a[j]-=temp;
            }
            cout<<count<<endl;
        }
    }
}
