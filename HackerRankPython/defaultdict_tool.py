from collections import defaultdict
n,m = map(int,input().split())
d=defaultdict(list)
for i in range(n):
    d["a"].append(input())
for i in range(m):
    d["b"].append(input())
k = dict(d)
for i in k["b"]:
    for j in range(len(k["a"])):
        if(i==k["a"][j]):
            print(j+1,end=" ")
    if (i not in k["a"]):
        print(-1, end=" ")
    print()