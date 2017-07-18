#include<iostream>
#include<algorithm>
#include<vector>
using namespace std;
vector<int> b;
int main()
{
    int n,k;
    cin>>n>>k;
    int luck,important,sum=0;
    for(int i=0;i<n;i++)
    {
        cin>>luck;
        cin>>important;
        if(important==0)
        {
            sum+=luck;
        }
        else
        {
            b.push_back(luck);
        }
    }
    sort(b.rbegin(),b.rend());
    while(k>0 && b.size()>0)
    {
        sum+=b[0];
        b.erase(b.begin());
        k--;
    }
    for(int i=0;i<b.size();i++)
    {
        sum-=b[i];
    }
    cout<<sum<<endl;
}
