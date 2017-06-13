from collections import deque
t = int(input())
for i in range(t):
    n = int(input())
    d = deque()
    d.extend(*[map(int,input().split())])
    m = len(d)
    min =1<<31+1
    for j in range(m):
        if(d[0]>d[len(d)-1] and d[0]<=min):
            min = d.popleft()
        elif(d[0]<=d[len(d)-1] and d[len(d)-1]<=min):
            min = d.pop()
    if(len(d)==0):
        print("Yes")
    else:
        print("No")