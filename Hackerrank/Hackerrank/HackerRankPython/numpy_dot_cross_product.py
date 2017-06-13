import numpy
n = int(input())
l = numpy.array([(list(map(int,input().split()))) for i in range(n)])
m = numpy.array([(list(map(int,input().split()))) for i in range(n)])

print(numpy.dot(l,m))