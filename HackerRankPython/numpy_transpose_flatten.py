import numpy
n,m = map(int,input().split())
l=[]
for i in range(n):
    l.append(list(map(int,input().split())))
myarray = numpy.array(l)
print(numpy.transpose(myarray))
print(myarray.flatten())