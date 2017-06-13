m = int(input())
k = set(map(int,input().split()))
n = int(input())
l = set(map(int,input().split()))
s = k&l
print(len(s))