from collections import OrderedDict
n = int(input())
d = OrderedDict()
for i in range(n):
    m = input()
    d[m]=d.get(m,0)+1
print(len(d))
print(*[value for value in d.values()])