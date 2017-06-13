#include<iostream>
using namespace std;

int main()
{

    string str = "hackerrank";
    string input;
    int t;
    cin>>t;
    while(t--)
    {
        cin>>input;
        int i=0;
        bool flag=true;
        int n=input.length();
        for(int j=0;j<n;j++)
        {
            if(str[i]==input[j])
            {
                i++;
            }
        }
        if(i==str.length())
        {
            cout<<"YES"<<endl;
        }
        else
            cout<<"NO"<<endl;
    }
}
