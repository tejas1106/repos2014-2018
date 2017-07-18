#include<iostream>
#include<cstring>
#include<vector>
#include<algorithm>
using namespace std;

int main()
{
    double d,calCompliance,compliance,price;
    int rfp,proposals,i,r,store,j,caseNo=1;
    vector<string> mystr;
    string temp,temp1;
    while(1)
    {
        cin>>rfp>>proposals;
        if(rfp==0 || proposals==0)
            break;
        for(i=0;i<rfp;i++)
        {
            cin.ignore();
            getline(cin,temp1);
        }
        compliance=0;
        price=20000000000;
        for(i=0;i<proposals;i++)
        {
            getline(cin,temp);
            mystr.push_back(temp);
            cin>>d>>r;
            for(j=0;j<r;j++)
            {
                cin.ignore();
                getline(cin,temp1);
            }
            calCompliance=(double)r/rfp;
            if(compliance<calCompliance)
            {
                compliance=calCompliance;
                store=i;
                price=d;
            }
            else if(compliance==calCompliance)
            {
                if(price>d)
                {
                    price=d;
                    store=i;
                }
            }
        }
        cout<<"RFP #"<<caseNo++<<endl<<mystr.at(store)<<endl<<endl;
        mystr.clear();
    }
}
