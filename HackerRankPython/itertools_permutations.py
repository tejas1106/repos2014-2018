from itertools import permutations
string,num = input().split()
num = int(num)
l=sorted(list(permutations(string,num)))
for i in l:
    print("".join(i))