#include<iostream>
using namespace std;
void quicksort(int[],int,int);
int a[200000];
int b[200000];
int main()
{
    int n,min=20000000,diff;
    cin>>n;
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    quicksort(a,0,n-1);
    for(int i=0;i<n;i++)
    {
        cout<<a[i]<<" ";
    }
    cout<<endl;
    for(int i=0;i<n-1;i++)
    {
        diff = a[i+1]-a[i];
        if(diff<min)
        {
            min=diff;
        }
    }
    for(int i=0;i<n-1;i++)
    {
        if(a[i+1]-a[i]==min)
        {
            cout<<a[i+1]<<" "<<a[i]<<" ";
        }
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
    if(start<right)
    {
        quicksort(a,start,right);
    }
    if(left<end)
    {
        quicksort(a,left,end);
    }
}
