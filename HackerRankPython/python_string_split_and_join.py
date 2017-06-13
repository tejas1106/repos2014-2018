x = input()
y = input().split()
z = list(x)
z[int(y[0])]=y[1]
print("".join(z))