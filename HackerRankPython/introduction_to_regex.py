import re
n = int(input())
for i in range(n):
    m = input()
    if(re.match(r"^[+-]?[0-9]*\.[0-9]+$",m)):
        print("True")
    else:
        print("False")