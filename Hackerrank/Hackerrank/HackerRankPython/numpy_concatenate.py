import numpy
n,m,p = map(int,input().split())
l=[]
k=[]
for i in range(m):
    l.append(list(map(int,input().split())))
for i in range(m):
    k.append(list(map(int,input().split())))
print(l)
print(k)
s = numpy.array(l)
t = numpy.array(k)
print(numpy.concatenate((s,t),axis = 0))