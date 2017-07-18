#include<iostream>
using namespace std;
int main()
{
    int t;
    cin>>t;
    int n,m;
    while(t--)
    {
        cin>>n>>m;
        if(m==1)
        {
            cout<<"2"<<endl;
        }
        else if(n%2==0)
        {
            cout<<"2"<<endl;
        }
        else
        {
            cout<<"1"<<endl;
        }
    }
    return 0;
}
