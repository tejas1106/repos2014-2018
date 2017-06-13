x = int(input())
y = len(bin(x)[2:])

for i in range(1,x+1):
    print(("%d"%(i)).rjust(y)+("%o"%(i)).rjust(y+1)+("%X"%(i)).rjust(y+1)+("%s"%(bin(i)[2:])).rjust(y+1))