#include<iostream>
#include<cmath>
using namespace std;
int a[500000];
int main()
{
    int n,q,temp,psum=0,nsum=0,pcount=0,ncount=0;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
        if(a[i]<0)
        {
            nsum+=a[i];
            ncount++;
        }
        else
        {
            psum+=a[i];
            pcount++;
        }
    }
    cin>>q;
    for(int i=0;i<q;i++)
    {
        cin>>temp;
        psum+=temp*pcount;
        nsum+=temp*ncount;
        cout<<abs(psum)+abs(nsum)<<endl;
    }
    return 0;
}
