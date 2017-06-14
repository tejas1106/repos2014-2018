#include<iostream>
using namespace std;
int main()
{
    int prime_array[]={2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61};
    int q,i;
    long long int n,product;
    cin>>q;
    while(q--)
    {
        cin>>n;
        if(n==1)
        {
            cout<<0<<endl;
        }
        else
        {
            product = 1;
            for(i=0;i<15 && product>0;i++)
            {
                product *= prime_array[i];
                if(product>n)
                    break;
                cout<<product<<" "<<i<<endl;
            }
            cout<<i<<endl;
        }
    }
}
