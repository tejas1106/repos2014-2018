#include<iostream>
using namespace std;

int main()
{
    string str;
    int n,k;
    cin>>n;
    cin>>str;
    cin>>k;
    for(int i=0;i<n;i++)
    {
        if(str[i]>=65 && str[i]<=90)
        {
            str[i]='A'+(str[i]-'A'+k)%26;
        }
        else if(str[i]>=97 && str[i]<=122)
        {
            str[i]='a'+(str[i]-'a'+k)%26;
        }
    }
    cout<<str<<endl;
}
