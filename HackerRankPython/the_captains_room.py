num = int(input())
rooms = input().split()
rooms.sort()
#make 2 sets : one for even count and one for odd count
#answer is in odd set not in even
#take symmetric difference :)
b = set(rooms[0::2]) ^ set(rooms[1::2])
print(b.pop())