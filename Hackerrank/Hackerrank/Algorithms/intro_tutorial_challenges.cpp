#include<iostream>
using namespace std;

int main()
{
    int v,n;
    int a[1000];
    cin>>v>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
        if(a[i]==v)
            cout<<i<<endl;
    }
}
