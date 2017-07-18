#include<iostream>
#include<algorithm>
using namespace std;
int main()
{
    int n,k,a[100],magic_beverages;
    cin>>n>>k;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    sort(a,a+n);
    magic_beverages=a[n-1]-k;
    if(magic_beverages>0)
    cout<<a[n-1]-k<<endl;
    else
        cout<<"0"<<endl;
}
