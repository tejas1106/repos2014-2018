#include<iostream>
using namespace std;
int main()
{
    long long n,m,a,b,k,sum;
    int i;
    cin>>n>>m;
    sum=0;
    for(i=0;i<m;i++)
    {
        cin>>a>>b>>k;
        sum+=(b-a+1)*k;
    }
    cout<<sum/n<<endl;
}
