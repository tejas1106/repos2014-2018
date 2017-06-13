#include<iostream>
using namespace std;
int a[1000000];
int b[1000000];
int main()
{
    int n,m,pre_score=-1,score,k=0;
    bool flag;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>score;
        if(pre_score!=score)
        {
            a[k++]=score;
            pre_score=score;
        }
    }

    cin>>m;
    for(int j=0;j<m;j++)
    {
        cin>>b[j];
    }

    int j=0;
    int i=k+1;
    flag=true;
    while(i)
    {
        if(a[i]<b[j] && flag)
        {
            cout<<(i+1)<<endl;
            flag=false;
            j++;
        }
        i--;
    }
}
