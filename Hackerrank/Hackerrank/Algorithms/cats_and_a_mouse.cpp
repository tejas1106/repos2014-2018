#include<iostream>
using namespace std;

int absolute(int x)
{
    if(x<0)
    {
        return x*(-1);
    }
    else return x;
}
int main()
{
    int q,x,y,z;
    cin>>q;
    while(q--)
    {
        cin>>x>>y>>z;
        if(absolute(x-z) > absolute(y-z))
        {
            cout<<"Cat B"<<endl;
        }
        else if(absolute(x-z) < absolute(y-z))
        {
            cout<<"Cat A"<<endl;
        }
        else
        {
            cout<<"Mouse C"<<endl;
        }
    }
}
