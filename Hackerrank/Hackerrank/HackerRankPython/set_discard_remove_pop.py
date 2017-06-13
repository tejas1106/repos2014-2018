num = int(input())
l = set(map(int,input().split()))
n = int(input())
for i in range(n):
    cmd, *arg = input().split()
    eval("l."+cmd+"("+','.join(arg)+")")
sum=0
for i in l:
    sum+=i
print(sum)