#include<iostream>
using namespace std;

int c[10000];
int main()
{
    int n,m,sum=0,charge,share;
    cin>>n>>m;
    for(int i=0;i<n;i++)
    {
        cin>>c[i];
        if(i!=m)
        sum+=c[i];
    }
    share=sum/2;
    cin>>charge;
    if(charge>share)
    {
        cout<<charge-share<<endl;
    }
    else if(charge==share)
    {
        cout<<"Bon Appetit"<<endl;
    }
}
