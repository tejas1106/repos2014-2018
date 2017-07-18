#include<iostream>
#include<algorithm>
#include<vector>
using namespace std;

class IceCream
{
public:
    int cost;
    int index;
    IceCream(int cost,int index)
    {
        this->cost = cost;
        this->index = index;
    }
};

int main()
{
    int t,n,m;
    cin>>t;
    for(int test=0;test<t;test++)
    {
        cin>>m>>n;
        vector<IceCream> arr;
        arr.reserve(n);
        for(int i=0;i<n;i++)
        {
            int cost;
            cin>>cost;
            arr.push_back(IceCream(cost,i+1));
        }

        sort(arr.begin(),arr.end(),compare);
    }
    return 0;
}
