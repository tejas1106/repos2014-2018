#include<iostream>
using namespace std;
int main()
{
    int n,count;
    string str1,str2;
    cin>>n;
    cin>>str1;
    cin>>str2;
    count=0;
    for(int i=0;i<n;i++)
    {
        if(str1[i]!='.' && str1[i]!=str2[i])
        {
            count++;
        }
    }
    cout<<count<<endl;
}
