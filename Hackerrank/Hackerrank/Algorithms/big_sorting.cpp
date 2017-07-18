#include<iostream>
#include<vector>
using namespace std;

bool comparator_function(string a,string b)
{
    int i = a.length();
    int j = b.length();
    if(i==j)
    return (a<b);
    return (i<j);
}

int main()
{

}
