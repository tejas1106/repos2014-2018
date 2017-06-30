#include<iostream>
using namespace std;
int isfibo(int n)
{
    if(n==0)
    {
        return 1;
    }
    else if(n<0)
    {
        return 1;
    }
    else
    {
        return n-isfibo(n-1);
    }

    return 0;
}

int main()
{
    int t,n,k;
    cin>>t;
    while(t--)
    {
        cin>>n;
        k = isfibo(n);
        if(k==1)
        {
            cout<<"IsFibo"<<endl;
        }
        else
        {
            cout<<"IsNotFibo"<<endl;
        }
    }
}
