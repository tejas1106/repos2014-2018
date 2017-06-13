x = list(input())
y = list(input())

t = len(x)
count=0
for i in range(0,t):
    if(x[i:i+len(y)]==y):
        count+=1
print(count)