#include<iostream>
#include<cstring>
using namespace std;

int lcs(char *X,char *Y,int m,int n);

int main()
{
    char x[1000],y[1000];
    cout<<"Enter x : ";
    cin>>x;
    cout<<"Enter y : ";
    cin>>y;
    int m = strlen(x);
    int n = strlen(y);
    cout<<"Length of LCS is "<<lcs(x,y,m,n)<<endl;
    return 0;
}


int lcs(char *x,char *y,int m,int n)
{
    if(m==0 || n==0)
    {
        return 0;
    }
    if(x[m-1]==y[n-1])
    {
        return 1+lcs(x,y,m-1,n-1);
    }
    else
    {
        return max(lcs(x,y,m-1,n),lcs(x,y,m,n-1));
    }
}
