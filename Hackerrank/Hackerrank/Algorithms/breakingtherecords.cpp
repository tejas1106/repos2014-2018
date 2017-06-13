#include<iostream>
using namespace std;
int main()
{
    int n,a,counterLeast=0,counterMost=0,min,max;
    cin>>n;
    cin>>a;
    min=max=a;
    for(int i=1;i<n;i++)
    {
        cin>>a;
        if(a>max)
        {
            counterMost++;
            max=a;
        }
        if(a<min)
        {
            counterLeast++;
            min=a;
        }
    }
    cout<<counterMost<<" "<<counterLeast<<endl;
}
