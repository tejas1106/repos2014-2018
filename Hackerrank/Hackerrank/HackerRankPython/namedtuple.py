from collections import namedtuple
n = int(input())
Student = namedtuple('Student',input())
print("%.2f" % ((sum([float(stud.MARKS) for stud in [Student(*input().split()) for i in range(n)]]))/n))