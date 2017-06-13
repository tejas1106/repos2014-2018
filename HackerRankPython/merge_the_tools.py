s=input()
n=len(s)
k=int(input())
temp=[]
l=0
for i in s:
    l+=1
    if i not in temp:
        temp.append(i)
    if l==k:
        print("".join(temp))
        temp=[]
        l=0