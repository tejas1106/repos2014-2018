from functools import reduce
from fractions import gcd
m = int(input())
l=[]
l=[1,1]
for i in range(m):
    a,b = map(int,input().split())
    l[0]*=a
    l[1]*=b
m=reduce(gcd,l)
print(*[i//m for i in l])