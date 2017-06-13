#include<iostream>
using namespace std;

int main()
{
    string str;
    cin>>str;
    int n=str.length();
    for(int i=0;i<n-1;i++)
    {
        if(str[i]==str[i+1])
        {
            str=str.substr(0,i)+str.substr(i+2,n-i-1);
            i=-1;
        }
        n=str.length();
    }
    if(str=="")
    {
        cout<<"Empty String"<<endl;
    }
    else
    cout<<str<<endl;

}
