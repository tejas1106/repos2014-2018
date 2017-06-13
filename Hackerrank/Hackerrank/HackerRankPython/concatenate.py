import numpy

array_1 = numpy.array([[1,2,3],[1,4,5]])
array_2 = numpy.array([[4,5,6],[1,6,5]])
array_3 = numpy.array([[7,8,9],[1,7,5]])

print(numpy.concatenate((array_1, array_2, array_3),axis=1))