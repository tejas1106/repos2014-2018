#include<iostream>
#include<algorithm>
using namespace std;
char a[20][20];
int b[300];
int main()
{
    int n,m,up=0,down=0,left=0,right=0,bcount=0,temp,min;
    cin>>n>>m;
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<m;j++)
        {
            cin>>a[i][j];
        }
    }
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<m;j++)
        {
            if(a[i][j]=='G')
            {
                temp = j;
                while(temp>=0)
                {
                    temp--;
                    if(a[i][temp]=='B' || temp<0)
                    {
                        break;
                    }
                    left++;
                }
                temp = j;
                while(temp<m)
                {
                    temp++;
                    if(a[i][temp]=='B' || temp>m-1)
                    {
                        break;
                    }
                    right++;
                }
                temp = i;
                while(temp>=0)
                {
                    temp--;
                    if(a[temp][j]=='B' || temp<0)
                    {
                        break;
                    }
                    up++;
                }
                temp = i;
                while(temp<n)
                {
                    temp++;
                    if(a[temp][j]=='B' || temp>n-1)
                    {
                        break;
                    }
                    down++;
                }
                int c[]={up,down,left,right};
                min=20;
                for(int k=0;k<4;k++)
                {
                    if(c[k]<min)
                    {
                        min=c[k];
                    }
                }
                b[bcount]=4*min+1;
                //cout<<b[bcount]<<endl;
                //cout<<up<<" "<<down<<" "<<left<<" "<<right<<" "<<endl;
                //cout<<i<<" "<<j<<endl;
                bcount++;
                up=down=left=right=0;
                if(min>=1)
                {
                    for(int k=1;k<=min;k++)
                    {
                        a[i+k][j]='B';
                        a[i][j+k]='B';
                    }
                    for(int k=min;k>=1;k--)
                    {
                        a[i+k][j]='B';
                        a[i][j+k]='B';
                    }
                    a[i][j]='B';
                }

                j=j+min;
            }
        }
    }
    int d = sizeof(b)/sizeof(b[0]);
    sort(b,b+d);
    cout<<b[d-1]*b[d-2]<<endl;
}
