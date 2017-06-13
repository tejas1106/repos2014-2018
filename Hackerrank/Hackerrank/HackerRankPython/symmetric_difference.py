m = int(input())
a = set(input().split())
n= int(input())
b = set(input().split())
c=a.symmetric_difference(b)
d = list(map(int,c))
d = sorted(d)
for i in d:
    print(i)