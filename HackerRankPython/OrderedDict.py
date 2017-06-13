from collections import OrderedDict
d = OrderedDict()
n = int(input())
for i in range(n):
    m,space,quantity = input().rpartition(' ')
    d[m]=d.get(m,0)+int(quantity)
for i in d:
    print(i+" %d" % (d[i]))