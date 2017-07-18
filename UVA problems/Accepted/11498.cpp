#include<cstdio>
using namespace std;
int main()
{
    int n,a,b,m,k;
    while(scanf("%d",&n),n)
    {
        scanf("%d %d",&m,&k);
        while(n--)
        {
            scanf("%d %d",&a,&b);
            if((a==m)||(b==k))
            {
                printf("divisa\n");
            }
            else if(a>m)
            {
                printf("%s",(b>k?"NE\n":"SE\n"));
            }
            else
            {
                printf("%s",(b>k?"NO\n":"SO\n"));
            }
        }
    }
}
