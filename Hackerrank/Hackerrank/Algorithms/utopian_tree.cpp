#include<iostream>
using namespace std;

int main()
{
    int t,a,height;
    cin>>t;
    while(t--)
    {
        cin>>a;
        height=1;
        for(int i=0;i<a;i++)
        {
            if(i%2==0)
            {
                height*=2;
            }
            else
            {
                height+=1;
            }
        }
        cout<<height<<endl;
    }
}
