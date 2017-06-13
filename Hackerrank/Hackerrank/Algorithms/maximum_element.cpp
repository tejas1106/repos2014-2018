#include<iostream>
#include<vector>
#include<algorithm>
using namespace std;
int main()
{
    vector<int> myvector;
    int n,a,b,max;
    cin>>n;
    while(n--)
    {
        cin>>a;
        switch(a)
        {
            case 1:
                cin>>b;
                myvector.push_back(b);
                break;
            case 2:
                myvector.pop_back();
                break;
            case 3:
                vector<int>::iterator it;
                max=-1;
                int max = *max_element(myvector.begin(),myvector.end());
                cout<<max<<endl;
                break;
        }
    }
}
