#include<iostream>
#include<map>
using namespace std;

int main()
{
    int n,counter=0,a;
    map<int,int> mymap;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a;
        mymap[a]+=1;
    }
    for(map<int,int>::iterator it = mymap.begin();it!=mymap.end();it++)
    {
        counter+=(it->second)/2;
    }
    cout<<counter<<endl;
}
