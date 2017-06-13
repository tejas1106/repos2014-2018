import string
x = int(input())
l = x*2-1
list = []
alphabets = string.ascii_lowercase
for i in range(x):
    t="-".join(alphabets[i:x])
    list.append((t[::-1]+t[1:]).center(4*x-3,'-'))
print('\n'.join(list[::-1]+list[1:]))