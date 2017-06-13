import re
a = '[aeiou]'
b = '[qwrtypsdfghjklzxcvbnm]'
l = list(map(lambda x:x.group(),re.finditer('(?<='+b+')('+a+'{2,}'+')(?='+b+')',input(),re.I)))
print("\n".join(l or ['-1']))