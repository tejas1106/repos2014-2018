#include<iostream>
using namespace std;
int main()
{
    int n,a,b;
    char ch;
    cin>>n;
        while(n--)
        {
        cin>>a>>b;
        if(a>b)
        cout<<">"<<endl;
        else if(b>a)
        cout<<"<"<<endl;
        else
            cout<<"="<<endl;
        }
}
