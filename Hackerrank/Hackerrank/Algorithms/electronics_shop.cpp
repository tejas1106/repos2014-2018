#include<iostream>
#include<vector>
using namespace std;

int main()
{
    int s,n,m,max=-1,sum;
    cin>>s>>n>>m;
    vector<int> keyboards(n);
    vector<int> usb(m);
    for(int i=0;i<n;i++)
    {
        cin>>keyboards[i];
    }

    for(int i=0;i<m;i++)
    {
        cin>>usb[i];
    }

    for(int i=0;i<n;i++)
    {
        for(int j=0;j<m;j++)
        {
            sum=keyboards[i]+usb[j];
            if(sum>max && sum<=s)
            {
                max=sum;
            }
        }
    }
    cout<<max<<endl;
}
