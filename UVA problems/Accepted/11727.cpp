#include<cstdio>
using namespace std;
int main()
{
    int n,caseNo=1,i,a[3],temp,j;
    scanf("%d",&n);
    while(n--)
    {
        scanf("%d %d %d",&a[0],&a[1],&a[2]);
        for(i=0;i<2;i++)
        {
            for(j=i+1;j<3;j++)
            {
                if(a[i]>a[j])
                {
                    temp=a[i];
                    a[i]=a[j];
                    a[j]=temp;
                }
            }
        }
        printf("Case %d: %d\n",caseNo++,a[1]);
    }
}
