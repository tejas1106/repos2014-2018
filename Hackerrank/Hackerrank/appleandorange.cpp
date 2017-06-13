#include<iostream>
using namespace std;

int main()
{
    int s,t,a,b,m,n,apple,orange,counterApple=0,counterOrange=0;
    cin>>s>>t>>a>>b>>m>>n;
    for(int i=0;i<m;i++)
    {
        cin>>apple;
        if((apple+a)>=s && (apple+a)<=t)
        {
            counterApple++;
            cout<<counterApple<<endl;
        }
    }
    for(int i=0;i<n;i++)
    {
        cin>>orange;
        if((orange+b)>=s && (orange+b)<=t)
        {
            counterOrange++;
        }
    }
    cout<<counterApple<<endl;
    cout<<counterOrange<<endl;
}
