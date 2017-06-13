#include<iostream>
using namespace std;
int gcd(int a,int b);
int main()
{
    int m,n,a,b;
    cin>>m>>n;
    cin>>a;
    b = a;
    for(int i=1;i<m;i++)
    {
        cin>>a;
        b = (a*b)/gcd(a,b);
    }
    int lcm_value = b;

    cin>>a;
    b=a;
    for(int i=1;i<n;i++)
    {
        cin>>a;
        b = gcd(a,b);
    }
    int gcd_value = b;

    int counter=0;
    int temp=lcm_value;
    while(1)
    {
        if(gcd_value%lcm_value==0)
        {
            counter++;
        }
        lcm_value+=temp;
        if(lcm_value>gcd_value)
        {
            break;
        }
    }
    cout<<counter<<endl;
    return 0;
}


int gcd(int num1,int num2)
{
    int temp;
    while(num2!=0)
    {
        temp = num2;
        num2 = num1%num2;
        num1 = temp;
    }
    return num1;
}
