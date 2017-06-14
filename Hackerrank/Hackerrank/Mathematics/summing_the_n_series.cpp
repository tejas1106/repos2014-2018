#include<iostream>
using namespace std;
int main()
{
    int t,i;
    long long sum,n,m;
    cin>>t;
    while(t--)
    {
        sum=0;
        cin>>n;
        m = ((n%1000000007)*(n%1000000007))%1000000007;
        cout<<m<<endl;
    }
}
