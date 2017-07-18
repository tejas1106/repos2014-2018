#include<iostream>
#include<algorithm>
using namespace std;

int main()
{
    int H,U,D,F,day;
    double climbed,K;
    while(1)
    {
        cin>>H>>U>>D>>F;
        if(H==0)
            break;
        climbed=0;
        K=((double)U*F)/100;
        day=0;
        while(climbed>=0 && climbed<=H)
        {
            climbed+=(U-day*K)>0?(U-day*K):0;
            day++;
            if(climbed>H)
                break;
            climbed-=D;
        }
        if(climbed>H)
            cout<<"success on day "<<day<<endl;
        else
            cout<<"failure on day "<<day<<endl;
    }
}
