#include<iostream>
#include<algorithm>
#include<vector>
using namespace std;
vector<int> a;
int main()
{
    int n,temp;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        a.push_back(temp);
    }
    sort(a.rbegin(),a.rend());
    bool flag =false;
    for(int i=0;i<n;i++)
    {
        if(a[i+2]+a[i+1]>a[i])
        {
            cout<<a[i+2]<<" "<<a[i+1]<<" "<<a[i]<<endl;
            flag=true;
            break;
        }
    }
    if(!flag)
    {
        cout<<"-1"<<endl;
    }
}
