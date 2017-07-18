#include<iostream>
using namespace std;
int main()
{
    int t,x,y;
    cin>>t;
    bool block[16][16];
    block[0][0]=false;
    block[0][1]=false;
    block[0][2]=true;
    block[1][1]=false;
    block[1][0]=false;
    block[2][0]=true;
    for(int i=2;i<15;i++)
    {
        for(int j=0;j<=i;j++)
        {
            if(i-2>=0 && j+1<15 && block[i-2][j+1]==false)
            {
                block[i][j]=true;
            }
            else if(i-2>=0 && j-1>=0 && block[i-2][j-1]==false)
            {
                block[i][j]=true;
            }
            else if(i+1<15 && j-2>=0 && block[i+1][j-2]==false)
            {
                block[i][j]=true;
            }
            else if(i-1>=0 && j-2>=0 && block[i-1][j-2]==false)
            {
                block[i][j]=true;
            }
            else
            {
                block[i][j]=false;
            }
        }
    }

    for(int i=0;i<15;i++)
    {
        for(int j=0;j<15;j++)
        {
            if(block[i][j])
            {
                cout<<"T"<<" ";
            }
            else
            {
                cout<<"F"<<" ";
            }
        }
        cout<<endl;
    }
    while(t--)
    {
        cin>>x>>y;
        if(block[x-1][y-1])
        {
            cout<<"First"<<endl;
        }
        else
        {
            cout<<"Second"<<endl;
        }
    }
    return 0;
}
