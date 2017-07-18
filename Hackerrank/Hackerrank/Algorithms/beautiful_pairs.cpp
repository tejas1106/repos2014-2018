#include<iostream>
#include<vector>
using namespace std;
vector<int> a,b;
int main()
{
    int n,temp,count=0;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        a.push_back(temp);
    }
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        b.push_back(temp);
    }
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<n;j++)
        {
            if(a[i]==b[j])
            {
                count++;
                b[j]=-1;
            }
        }
    }
    if(count==n)
    {
        cout<<count<<endl;
    }
    else
        cout<<count+1<<endl;
}
