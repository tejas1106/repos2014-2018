s = set(input().split())
n = int(input())
t = False
for i in range(n):
    m = set(input().split())
    if len(s-m)!=0 and s.intersection(m)==m:
        t = True
    elif s.intersection(m)!=m:
        t = False
        break
print(t)