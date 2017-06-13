from collections import OrderedDict
s = list(input())
d = OrderedDict()
for i in s:
    d[i] = d.get(i,0)+1
l=[(i,d[i]) for i in d]
l.reverse()
t=sorted(l,key = lambda x:(-x[1],x[0]))
for i in t[0:3]:
    print(i[0]+" %d" %(i[1]))
