#include<iostream>
#include<vector>
using namespace std;
void partition(vector<int>);
int main()
{
    vector<int> a;
    int n,temp;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>temp;
        a.push_back(temp);
    }

    partition(a);
    return 0;
}

void partition(vector<int> a)
{
    vector<int> left,right,equal;
    for(vector<int>::iterator it=a.begin();it!=a.end();it++)
    {
        if(*it==a.at(0))
        {
            equal.push_back(*it);
        }
        else if(*it<a.at(0))
        {
            left.push_back(*it);
        }
        else if(*it>a.at(0))
        {
            right.push_back(*it);
        }
    }

    for(vector<int>::iterator it=left.begin();it!=left.end();it++)
    {
        cout<<*it<<" ";
    }
    for(vector<int>::iterator it=equal.begin();it!=equal.end();it++)
    {
        cout<<*it<<" ";
    }
    for(vector<int>::iterator it=right.begin();it!=right.end();it++)
    {
        cout<<*it<<" ";
    }

}
