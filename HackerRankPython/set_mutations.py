num = int(input())
a = set(map(int,input().split()))
n = int(input())
for i in range(n):
    cmd,arg = input().split()
    b = set(map(int,input().split()))
    eval("a."+cmd+"(b)")
sum = 0
for i in a:
    sum+=i
print(sum)