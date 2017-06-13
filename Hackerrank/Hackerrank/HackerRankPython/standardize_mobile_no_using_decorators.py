l=[input() for i in range(int(input()))]

def wrapper(f):
    def phone(l):
        f(["+91 " + c[-10:-5] + " " + c[-5:] for c in l])
    return phone
@wrapper
def sort_mobile(l):
    print(*sorted(l),sep="\n")
sort_mobile(l)