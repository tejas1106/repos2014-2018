#include<iostream>
using namespace std;
void quicksort(int[],int,int);
int main()
{
    int n;
    int a[1000];
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    int start = 0,end = n-1;
    quicksort(a,start,end);
    for(int i=0;i<n;i++)
    {
        cout<<a[i]<<endl;
    }
    return 0;
}

void quicksort(int a[],int start,int end)
{
    int key = (start+end)/2,left,right,temp;
    left = start;
    right = end;
    while(left<=right)
    {
        while(a[left]<a[key])
        {
            left++;
        }
        while(a[right]>a[key])
        {
            right--;
        }
        if(left<=right)
        {
            temp=a[right];
            a[right]=a[left];
            a[left]=temp;
            left++;
            right--;
        }
    }
    for(int i=0;i<8;i++)
    {
        cout<<a[i]<<" ";
    }
    cout<<endl;
    if(start<right)
    {
        quicksort(a,start,right);
    }
    if(left<end)
    {
        quicksort(a,left,end);
    }
}
