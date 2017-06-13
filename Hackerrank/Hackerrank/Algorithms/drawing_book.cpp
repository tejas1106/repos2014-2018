#include<iostream>
#include<algorithm>
using namespace std;

int main()
{
    int n,a;
    cin>>n>>a;
    cout<<min(a/2,n/2-a/2);
}
