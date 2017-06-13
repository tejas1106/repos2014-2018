#include<iostream>
#include<algorithm>
using namespace std;

int a[100000];

int absolute(int number)
{
    if(number<0)
    {
        return number*(-1);
    }
    else
        return number;
}
int main()
{
    int min = 100000001;
    int n;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }

    sort(a,a+n);

    for(int j=0;j<n-1;j++)
    {
        if(absolute(a[j]-a[j+1])<min)
        {
            min=absolute(a[j]-a[j+1]);
        }
    }
    cout<<min<<endl;
}
