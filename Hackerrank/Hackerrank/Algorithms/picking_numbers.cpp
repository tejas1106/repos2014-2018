#include<iostream>
#include<algorithm>
#include<map>
#include<set>
using namespace std;

int absolute(int x)
{
    if(x<0)
        return (-1)*x;
    else return x;
}

int main()
{
    int n,counter=0;
    int a;
    map<int,int> mymap;
    set<int> myset;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a;
        myset.insert(a);
        mymap[a]+=1;
    }
    int max=0;
    set<int>::iterator temp=myset.begin();
    max=mymap[*temp];
    for(set<int>::iterator it=myset.begin();it!=myset.end();it++)
    {
        temp=it;
        temp++;
        if(mymap[*it]+mymap[*temp]>max && (*temp-*it)==1)
        {
            max=mymap[*it]+mymap[*temp];
        }
        else if(mymap[*it]>max)
        {
            max=mymap[*it];
        }
    }
    cout<<max<<endl;
}
