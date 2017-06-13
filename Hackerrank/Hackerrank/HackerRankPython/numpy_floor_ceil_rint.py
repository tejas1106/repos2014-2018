import numpy
l = list(map(float,input().split()))
myarray=numpy.array(l)
print(numpy.floor(myarray))
print(numpy.ceil(myarray))
print(numpy.rint(myarray))