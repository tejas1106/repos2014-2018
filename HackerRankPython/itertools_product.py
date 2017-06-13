from itertools import product
m = map(int,input().split())
n = map(int,input().split())
l=list(product(m,n))
for i in l:
    print(i,end=" ")