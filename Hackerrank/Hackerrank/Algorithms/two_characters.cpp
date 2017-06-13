#include<iostream>
using namespace std;

int main()
{
    string str,str1;
    cin>>str;
    int n = str.length();
    for(int i=0;i<n-1;i++)
    {
        if(str[i]==str[i+1])
        {
            str1=str.substr(0,i);
            str=str1+str.substr(i+2,n-2);
            i=-1;
        }
        n=str.length();
        cout<<str<<endl;
    }
    n=str.length();
    for(int i=0;i<n-1;i++)
    {

    }
    cout<<str.length()<<endl;
}
