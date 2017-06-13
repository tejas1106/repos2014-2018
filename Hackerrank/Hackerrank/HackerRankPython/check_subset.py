test_cases = int(input())
for i in range(test_cases):
    m = int(input())
    l = set(map(int,input().split()))
    n = int(input())
    k = set(map(int, input().split()))
    if(l.intersection(k)==l):
        print("True")
    else:
        print("False")