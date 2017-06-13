m = list(map(int,input().split()))
n = list(map(int,input().split()))
k = set(map(int,input().split()))
l = set(map(int,input().split()))

counter=0
for i in n:
    if i in k:
        counter+=1
    if i in l:
        counter-=1
print(counter)