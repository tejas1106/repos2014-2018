#include<iostream>
#include<sstream>
#include<string>
#include<iomanip>
using namespace std;
int main()
{
    string time;
    cin>>time;
    if(time[8]=='A')
    {
        string start = time.substr(0,2);
        stringstream ss(start);
        int hours;
        ss>>hours;
        if(hours==12)
        {
            cout<<setfill('0')<<setw(2)<<(hours-12);
            cout<<time.substr(2,6)<<endl;
        }
        else
        cout<<time.substr(0,8)<<endl;
    }
    if(time[8]=='P')
    {
        string start = time.substr(0,2);
        stringstream ss(start);
        int hours;
        ss>>hours;
        if(hours==12)
            {
            cout<<time.substr(0,8)<<endl;
        }
        else
            {
        hours+=12;
        hours%=24;
        cout<<setfill('0')<<setw(2)<<hours;
        cout<<time.substr(2,6)<<endl;;
        }}
}
