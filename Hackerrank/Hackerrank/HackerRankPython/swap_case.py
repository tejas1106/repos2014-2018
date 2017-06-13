x = input()
a=[]
for i in x:
    if i.isupper():
        a.append(i.lower())
    elif i.islower():
        a.append(i.upper())
    else:
        a.append(i)
print("".join(a))
