#include<iostream>
#include<algorithm>
#include<cmath>
using namespace std;
int a[100];
int main()
{
    int n;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    sort(a,a+n);
    long long int sum=0;
    for(int i=n-1;i>=0;i--)
    {
        sum+=a[i]*pow(2,n-i-1);
    }
    cout<<sum<<endl;
}

