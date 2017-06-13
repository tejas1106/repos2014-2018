cube = lambda x:x**3
def fibonacci(n):
    if(n==1):
        return [0]
    if(n==0):
        return []
    a=0
    b=1
    l=[0,1]
    for i in range(n-2):
        l.append(a+b)
        temp=b
        b=a+b
        a=temp
    return l
if __name__=="__main__":
    n = int(input())
    print(list(map(cube,fibonacci(n))))
