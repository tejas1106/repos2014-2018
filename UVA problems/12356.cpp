#include<cstdio>
int left[100100];
int right[100100];
int main()
{
    int s,b;
    while(scanf("%d%d",&s,&b),s||b)
    {
        for(int i=1;i<=s;i++)
        {
            left[i]=i-1;
            right[i]=i+1;
        }
        left[1]=-1;
        right[s]=-1;
        int l,r;
        while(b--)
        {
            scanf("%d%d",&l,&r);
            right[left[l]]=right[r];
            if(left[l]!=-1)
            {
                printf("%d ",left[l]);
            }
            else
                printf("* ");
            left[right[r]]=left[l];
            if(right[r]!=-1)
            {
                printf("%d\n",right[r]);
            }
            else
                printf("*\n");
        }
                    printf("-\n");
    }
}
