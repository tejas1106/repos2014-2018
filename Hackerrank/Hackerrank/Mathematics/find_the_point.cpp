#include<iostream>
using namespace std;
int main()
{
    int t,px,py,qx,qy,rx,ry;
    cin>>t;
    while(t--)
    {
        cin>>px>>py>>qx>>qy;
        rx = qx-px + qx;
        ry = qy-py+qy;
        cout<<rx<<" "<<ry<<endl;
    }
}
