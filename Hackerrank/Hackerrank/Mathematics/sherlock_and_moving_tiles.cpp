#include<iostream>
#include<cmath>
using namespace std;
int main()
{
    float l,s1,s2,m,ans;
    int q;
    cin>>l>>s1>>s2;
    cin>>q;
    while(q--)
    {
        cin>>m;
        ans=(l-sqrt(m))*sqrt(2)/abs(s1-s2);
        cout<<ans<<endl;
    }
}
