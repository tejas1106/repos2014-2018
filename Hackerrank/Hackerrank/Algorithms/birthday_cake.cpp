#include<iostream>
using namespace std;
int main()
{
    int largest = -1;
    int n;
    int counter=0;
    int storemax,a;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a;
        if(storemax==a)
        {
            counter++;
        }
        else if(storemax<a)
        {
            storemax=a;
            counter=1;
        }
    }
    cout<<counter<<endl;
    return 0;
}
