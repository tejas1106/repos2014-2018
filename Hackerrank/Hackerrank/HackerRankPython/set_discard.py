n = int(input())
s = set(input().split())
N = int(input())
for i in range(N):
    t = input().split()
    eval("s."+t[0]+"("+t[1]+")")
print(sum(t))