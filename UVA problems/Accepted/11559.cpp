#include<cstdio>
#include<algorithm>
using namespace std;
int k[13];
int main()
{
    int p,b,h,w,i,ans,price,maximum;
    while(scanf("%d%d%d%d",&p,&b,&h,&w)==4)
    {
        ans=b+1;
        maximum=0;
        while(h--)
        {
            scanf("%d",&price);
            for(i=0;i<w;i++)
            {
                scanf("%d",&k[i]);
                maximum=max(maximum,k[i]);
            }
            if(maximum>=p)
            {
                ans=min(ans,price*p);
            }
        }
        if(ans==b+1)
        {
            printf("stay home\n");
        }
        else
            printf("%d\n",ans);
    }
}
