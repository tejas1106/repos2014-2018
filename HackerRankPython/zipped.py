m,n = map(int,input().split())
l = []
for i in range(n):
    l.append(map(float,input().split()))
z = zip(*l)
for i in list(z):
    print(sum(i)/n)