#include<iostream>
using namespace std;

int main()
{
    int n,valley=0,level=0;
    char a;
    bool flag = true;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a;
        if(level==0)
        {
            flag=true;
        }
        if(a=='D')
        {
            level-=1;
        }
        else
        {
            if(level<0 && flag)
            {
                valley+=1;
                flag=false;
            }
            level+=1;
        }
    }
    cout<<valley<<endl;
}
