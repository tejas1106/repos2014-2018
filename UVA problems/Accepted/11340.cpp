#include<iostream>
#include<map>
#include<cstring>
#include<cstdio>
#include<iomanip>
using namespace std;

int main()
{
    int t,price,lines,i,n;
    char character,c;
    double sum;
    map<char,int> mymap;
    while(cin>>t)
    {
        if(t==0)
            break;
        while(t--)
        {
            mymap.clear();
            sum=0;
            cin>>n;
            while(n--)
            {
                cin>>character;
                cin>>price;
                mymap[character]=price;
            }
            cin>>lines;
            c=getchar();
            sum=0;
            while(c=getchar())
            {
                if(c!=' '||c!='\n')
                    sum+=mymap[c];
                if(c=='\n')
                {
                    lines--;
                }
                if(lines==0)
                    break;
            }
           printf("%.2f$\n",sum/100);
        }
    }
}
