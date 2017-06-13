n = int(input())
a=[]
for i in range(0,n):
    x=input()
    y=float(input())
    a.append([x,y])

a.sort(key=lambda x:x[1])
x=a[0][1]
for i in a:
    if i[1]>x:
        break
y=i[1]
z=[]
for i in a:
    if i[1]==y:
        z.append(i[0])
list.sort(z)
for i in z:
    print(i)
