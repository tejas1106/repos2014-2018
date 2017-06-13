from collections import deque
n = int(input())
x = deque()
for i in range(n):
    cmd,*arguments = input().split()
    eval("x."+cmd+"("+",".join(arguments)+")")
print(*x)