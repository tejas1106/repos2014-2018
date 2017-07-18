#include<cstdio>
#include<algorithm>
using namespace std;
int main()
{
    int n,maximum,speed,t,i,caseNo=1;
    scanf("%d",&t);
    while(t--)
    {
        scanf("%d",&n);
        maximum=0;
        for(i=0;i<n;i++)
        {
            scanf("%d",&speed);
            maximum=max(maximum,speed);
        }
        printf("Case %d: %d\n",caseNo++,maximum);
    }
}
