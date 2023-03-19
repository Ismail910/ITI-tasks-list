


# def characterteLocator():
#     str = input("Enter your words: ")
#     char = input("Enter your char: ")
#     for x in str:
#         if(x == char):
#             #print([x, str.find(x)])
#             print([ char.find(x)])
# characterteLocator()

def character_indexes_comprehension():
    string = input("Enter your words: ")
    match = input("Enter your char: ")
    return [index for index, character in enumerate(string) if character == match]
print(character_indexes_comprehension())
