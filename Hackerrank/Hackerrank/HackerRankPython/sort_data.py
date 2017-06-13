n,m = map(int,input().split())
l = []
for i in range(n):
    l.append(list(map(int,input().split())))
k = int(input())
l=sorted(l,key=lambda x:x[k])
[print(*i) for i in l]