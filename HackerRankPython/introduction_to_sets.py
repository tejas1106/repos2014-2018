n = int(input())
l = map(int,input().split())
m = list(set(l))
print(sum(m)/len(m))