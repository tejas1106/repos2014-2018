#include<iostream>
#include<vector>
#include<cmath>
#include<algorithm>
using namespace std;

int main()
{
    int n,m,value;
    vector<int> a;
    vector<int> b;
    vector<int>::iterator it;
    while(cin>>n)
    {
        if(n==0) break;
        a.clear();
        b.clear();
        for(int i=0;i<n;i++)
        {
            cin>>m;
            a.push_back(m);
            b.push_back(0);
        }
        b[0]=1;
        for(int i=0;i<n;i++)
        {
            value=abs(a[i]-a[i+1]);
            if(value>0 && value<n)
                b[value]=1;
        }
        it = find (b.begin(), b.end(), 0);
        if(it==b.end())
            cout<<"Jolly"<<endl;
        else
            cout<<"Not jolly"<<endl;
    }
}
