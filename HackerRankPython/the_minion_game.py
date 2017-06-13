s = input()
stuart = kevin = 0
vowels = 'AEIOU'

for i in range(len(s)):
    if s[i] in vowels :
        kevin += len(s)-i
    else:
        stuart += len(s)-i

if stuart>kevin:
    print("Stuart %d"%(stuart))
elif stuart<kevin:
    print("Kevin %d"%(kevin))
else:
    print("Draw")