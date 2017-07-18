#include<iostream>
using namespace std;
void quicksort(int[],int,int);
int main()
{
    int n,a[1000];
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    quicksort(a,0,n-1);
    return 0;
}

void quicksort(int a[],int start,int end)
{
    int key = a[start];
    int left = start+1;
    int right = end;
    while(left<=right)
    {
        while(a[left]<key)
        {
            left++;
        }
        while(a[left]>key)
        {
            right--;
        }
        if(left<=right)
        {
            temp = a[right];
            a[right] = a[left];
            a[left] = temp;
            left++;
            right--;
        }
    }
}
