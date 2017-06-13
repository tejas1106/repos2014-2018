import math
n = int(input())
a=[]
for i in range(0,n):
    string = input().split(" ")
    a.append(string)
name = input()
for i in a:
    if name==i[0]:
        x=(eval("+".join(i[1:]))/3)
        print("%0.2f"%(x))

