n = int(input())
m = list(map(int,input().split()))
if all(i>0 for i in m):
    print(any(str(i)==str(i)[::-1] for i in m))
else:
    print("False")