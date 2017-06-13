from itertools import combinations_with_replacement
string,num = input().split()
num = int(num)
for j in combinations_with_replacement(sorted(string),num):
    print("".join(j))