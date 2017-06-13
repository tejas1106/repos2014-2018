#include<iostream>
#include<map>
using namespace std;
int main()
{
    int n,a,max_value=-1,index=0;
    cin>>n;
    map<int,int> mymap;
    mymap[1]=mymap[2]=mymap[3]=mymap[4]=mymap[5]=0;
    for(int i=0;i<n;i++)
    {
        cin>>a;
        mymap[a]+=1;
    }
    map<int,int>::iterator it_max;
    for(map<int,int>::iterator it = mymap.begin();it!=mymap.end();it++)
    {
        if(it->second>max_value)
        {
            it_max=it;
            max_value=it->second;
        }else if(it->second==max_value)
        {
            if(it->first<index)
            {
                it_max=it;
                max_value=it->second;
                index=it->first;
            }
        }
    }
    cout<<it_max->first<<endl;
}
