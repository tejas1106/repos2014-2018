#include<cstdio>
using namespace std;

int main()
{
    int months,noOfMonths,currentMonth,i,countMonth;
    double downPayment,loan,monthlyPayment,borrowerAmount,carPrice,currentDepreciation;
    double depArray[101];
    while(scanf("%d %lf %lf %d",&months,&downPayment,&loan,&noOfMonths),months>=0)
    {
        countMonth=0;
        while(noOfMonths--)
        {
            scanf("%d %lf",&currentMonth,&currentDepreciation);
            for(i=currentMonth;i<=months;i++)
            {
                depArray[i]=currentDepreciation;
            }
        }

        monthlyPayment=loan/months;
        borrowerAmount=loan;
        carPrice=(loan+downPayment)*(1-depArray[0]);
        while(carPrice<borrowerAmount)
        {
            carPrice*=(1-depArray[++countMonth]);
            borrowerAmount-=monthlyPayment;
        }
        printf("%d %s\n",countMonth,(countMonth!=1?"months":"month"));
    }
}
