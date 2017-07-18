#include<iostream>
#include<algorithm>
using namespace std;
int a[100000];
int main()
{
    int n,k;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    sort(a,a+n);

    return 0;
}
