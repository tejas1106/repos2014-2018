import re
a = input()
b = input()
l = list(map(lambda x:x.group(),re.finditer(b,a)))
print(l)