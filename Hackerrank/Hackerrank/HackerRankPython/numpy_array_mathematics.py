import numpy
n,m = map(int,input().split())
a=[]
b=[]
for i in range(n):
    a.append(list(map(int,input().split())))
for i in range(n):
    b.append(list(map(int,input().split())))
l=numpy.array(a)
k=numpy.array(b)
print(numpy.add(l,k))
print(l-k)
print(l*k)
print(l//k)
print(l%k)
print(l**k)