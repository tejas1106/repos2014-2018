#include<iostream>
#include<algorithm>
#include<iostream>
#include<cstring>
using namespace std;
char g[100][100];
int main()
{
    int t,n;
    cin>>t;
    while(t--)
    {
        cin>>n;
        for(int i=0;i<n;i++)
        {
            cin>>g[i];
            sort(g[i],g[i]+n);
        }
        bool flag=true;
        for(int j=0;j<n;j++)
        {
            for(int i=0;i<n-1;i++)
            {
                if(g[i][j]>g[i+1][j])
                {
                    flag=false;
                    break;
                }
            }
        }
        if(flag)
        {
            cout<<"YES"<<endl;
        }
        else
        {
            cout<<"NO"<<endl;
        }
    }
}
