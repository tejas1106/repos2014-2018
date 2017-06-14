#include<iostream>
using namespace std;
int main()
{
    int t,n,k,i;
    long long product;
    cin>>t;
    while(t--)
    {
        cin>>n;
        product = 1;
        for(i=0;i<n-1;i++)
        {
            cin>>k;
            product *=k;
            product%=1234567;
        }
        cout<<product%1234567<<endl;
    }
}
