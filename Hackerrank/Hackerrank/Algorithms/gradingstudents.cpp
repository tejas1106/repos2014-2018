#include<iostream>
using namespace std;

int main()
{
    int n,grade;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>grade;
        if(grade<38)
        {
            cout<<grade<<endl;
        }
        else
        {
            if(grade%10==8 || grade%10==3)
            {
                cout<<grade+2<<endl;
            }
            else if(grade%10==9 || grade%10==4)
            {
                cout<<grade+1<<endl;
            }
            else
                cout<<grade<<endl;
        }
    }
}
