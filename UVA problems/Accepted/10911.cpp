#include<cstdio>
#include<algorithm>
#include<cmath>
using namespace std;
int n,target;
double dist[16][16],memo[(1<<16)];
double matching(int bitmask)
{
    if(memo[bitmask]>-1)
        return memo[bitmask];
    if(bitmask==target)
        return memo[bitmask]=0;

    double ans=2000000000.0;
    int p1,p2;
    for(p1=0;p1<2*n;p1++)
        if(!(bitmask&(1<<p1)))
        break;
    for(p2=p1+1;p2<2*n;p2++)
        if(!(bitmask&(1<<p2)))
        {
            ans=min(ans,dist[p1][p2]+matching(bitmask|(1<<p1)|(1<<p2)));
        }
        return memo[bitmask]=ans;
}

int main()
{
    int x[20],y[20];
    int i,j,caseNo=1;
    while(scanf("%d",&n),n)
    {
        for(i=0;i<2*n;i++)
            scanf("%*s %d %d",&x[i],&y[i]);
        for(i=0;i<2*n-1;i++)
        {
            for(j=i+1;j<2*n;j++)
            {
                dist[i][j]=dist[j][i]=hypot(x[i]-x[j],y[i]-y[j]);
            }
        }

        target=(1<<2*n)-1;
        for(i=0;i<((1<<16)-1);i++)
        {
            memo[i]=-1;
        }

        printf("Case %d: %.2lf\n",caseNo++,matching(0));
    }
}


