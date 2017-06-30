#include<iostream>
#include<cmath>
using namespace std;
int main()
{
    int t,a,b,x,n;
    cin>>t;
    while(t--)
    {
        cin>>a>>b>>x;
        n=pow(a,b)/x;
        cout<<(int)n*x<<endl;
    }
}
