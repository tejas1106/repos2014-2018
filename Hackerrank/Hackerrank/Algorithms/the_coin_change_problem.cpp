#include<iostream>
#include<vector>
#include<algorithm>
using namespace std;
int coin[100];
long long int change[250]={0};
int main()
{
    int n,m;
    cin>>n>>m;
    change[0]=1;
    for(int i=0;i<m;i++)
    {
        cin>>coin[i];
    }
    sort(coin,coin+m);
    for(int i=0;i<m;i++)
    {
        for(int j=coin[i];j<=n;j++)
        {
            change[j]+=change[j-coin[i]];
        }
    }
    cout<<change[n]<<endl;
}
