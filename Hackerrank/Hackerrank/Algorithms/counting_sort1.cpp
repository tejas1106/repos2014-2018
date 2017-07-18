#include<iostream>
using namespace std;
int main()
{
    int n,a[100]={0},temp;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        a[temp]++;
    }
    for(int i=0;i<100;i++)
    {
        for(int j=0;j<a[i];j++)
        {
            cout<<i<<" ";
        }
    }
    return 0;
}
