# print(*sorted(input(), key=lambda c: (c.isdigit()-c.islower())), sep='')
print(*sorted(input(),key=lambda c:(c in "02468",c in "13579",c.isupper(),c.islower(),c)),sep="")