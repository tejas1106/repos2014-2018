#include<iostream>
#include<algorithm>
#include<set>
char s[10000];
using namespace std;
int main()
{
    set<int> myset;
    string s;
    cin>>s;
    sort(s.begin(),s.end());
    int n = s.length();
    char current_char,prev_char=' ';
    int value=0;
    for(int i=0;i<n;i++)
    {
        current_char = s[i];
        if(current_char==prev_char)
        {
            myset.insert(value+current_char-'a'+1);
            value+=current_char-'a'+1;
        }
        else
        {
            myset.insert(current_char-'a'+1);
            value=current_char-'a'+1;
        }
        prev_char = current_char;
    }
    set<int>::iterator it;
    int k;
    cin>>k;
    int temp;
    while(k--)
    {
        cin>>temp;
        if(myset.find(temp)!=myset.end())
        {
            cout<<"Yes"<<endl;
        }
        else
        {
            cout<<"No"<<endl;
        }
    }
}

