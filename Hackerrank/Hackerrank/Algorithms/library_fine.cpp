#include<iostream>
using namespace std;
int main()
{
    int a,b,c,d,e,f,fine;
    cin>>a>>b>>c>>d>>e>>f;
    if(c>f)
    {
        fine=10000;
    }
    else if(c==f && b>e)
    {
        fine=500*(b-e);
    }
    else if(c==f && e==b && a>d)
    {
        fine=15*(a-d);
    }
    else
    {
        fine=0;
    }
    cout<<fine<<endl;
}
