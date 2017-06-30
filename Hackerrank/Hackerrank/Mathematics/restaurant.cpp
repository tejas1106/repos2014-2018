#include<iostream>
using namespace std;
int main()
{
    int t,l,b,area,minimum,i;
    cin>>t;
    while(t--)
    {
        cin>>l>>b;
        area = l*b;
        minimum = l<b?l:b;
        for(i=minimum;i>0;i--)
        {
            if(area%(i*i)==0)
            {
                break;
            }
        }
        cout<<area/(i*i)<<endl;
    }
}
