import numpy
n,m = map(int,input().split())
l=[]
for i in range(n):
    l.append(list(map(int,input().split())))
myarray = numpy.array(l)
print(numpy.mean(myarray,axis=1))
print(numpy.var(myarray,axis=0))
print(numpy.std(myarray,axis=None))