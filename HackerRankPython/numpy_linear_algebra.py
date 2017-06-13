import numpy
m = int(input())
print(numpy.linalg.det(numpy.array([(list(map(float,input().split()))) for i in range(m)])))