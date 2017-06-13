from collections import Counter
x = int(input())
m = map(int,input().split())
k = dict(Counter(m))
sum=0
n = int(input())
for i in range(n):
    a,b = map(int,input().split())
    if(a in k and k[a]!=0):
        sum+=b
        k[a]-=1
print(sum)
    