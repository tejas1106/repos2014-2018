from itertools import groupby
print(*[(len(list(b)),int(a)) for a,b in groupby(input())])