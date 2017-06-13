x = input().split()
y = int(x[0])
z = int(x[1])
c = ".|."
a = y//2
for i in range(0,a):
    print((((c*(i)).rjust((a-1)*3,'-'))+c+((c*i).ljust((a-1)*3,'-'))).center(z,'-'))
print("WELCOME".center(z,"-"))
for i in range(a-1,-1,-1):
    print((((c*(i)).rjust((a-1)*3,'-'))+c+((c*i).ljust((a-1)*3,'-'))).center(z,'-'))
