list = []
str = "['ahmed', 'fatma', 'Ibrahim']"
list = str.replace("[", "").replace('"' ,"").replace("'","").replace("]","").replace(" ","").split(",")
# list =  newStr.split(",")
# print(list)
dictionairy = {}
for char in list:
    dictionairy[char[0]] = char
print(dictionairy)
