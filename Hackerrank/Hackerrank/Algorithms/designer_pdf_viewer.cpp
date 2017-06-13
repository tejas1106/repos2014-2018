#include<iostream>
using namespace std;

int main()
{
    int a[100],max=-1;
    for(int i=0;i<26;i++)
    {
        cin>>a[i];
    }
    string str;
    cin>>str;
    int width=str.length();
    for(int i=0;i<width;i++)
    {
        if(a[(int)(str[i]-'a')]>max)
        max=a[(int)(str[i]-'a')];
    }
    cout<<max*width<<endl;
}
