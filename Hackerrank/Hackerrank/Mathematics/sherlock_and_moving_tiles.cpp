#include<iostream>
#include<cmath>
#include<cstdio>
using namespace std;
int main()
{
    double l,s1,s2,m,ans;
    int q;
    cin>>l>>s1>>s2;
    cin>>q;
    while(q--)
    {
        cin>>m;
        ans=(double)((l-sqrt(m))/abs(s1-s2))*sqrt(2);
        printf("%.7f\n",ans);
    }
}
