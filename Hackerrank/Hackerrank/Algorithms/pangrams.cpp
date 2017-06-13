#include<iostream>
#include<bitset>
using namespace std;

char toLower(char ch)
{
    if(ch>=65 && ch<=90)
    {
       ch-=32;
    }
    return ch;
}

int main()
{
    bitset<26> bitarray;
    bitarray.reset();
    string str;
    getline(cin,str);
    int n = str.length();
    int a;
    for(int i=0;i<n;i++)
    {
        a=(int)(tolower(str[i])-'a');
        if(a<=26 && a>=0)
        bitarray.set(a);
    }
    if(bitarray.all())
    {
        cout<<"pangram"<<endl;
    }
    else
        cout<<"not pangram"<<endl;
}


