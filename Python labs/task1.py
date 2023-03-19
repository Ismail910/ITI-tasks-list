# str1 = "aya"
# str2 = "aeiou"
# for ch in str1:
#     # for chr in str2:
#         if(ch != 'a' and 'e' and 'i' and 'o' and 'u' ):
#             print(ch)
#         else:
#             print("ignore")

             #################################  2

def calculate_the_area():
      
    shap = input("Enter the shape you want to calculate area of: ")
    area = 0
    pie = 3.14
    if shap == "Square":
        side = int(input("Enter the value of side: "))
        area = area + (side ** 2)
    elif shap == "Circle":
        radius = int(input("Enter the value of radius: "))
        area = area + (2 * pie * radius)
    elif shap == "Rectangle":
        length = int(input("Enter the value of length: "))
        width = int(input("Enter the value of length: "))
        area = area + (length * width)
    elif shap == "Triangle":
        base = int(input("Enter the value of base: "))
        height = int(input("Enter the value of height: "))
        area = area +(0.5 * base * height)
    else:
        print ("Select a valid shape")
    print ("%.2f" % area)

calculate_the_area()



#              #################################### 3
# num = int(input("Enter number: "))
# for i in range(num):
#     # for j in range(i+1):
#         print(" " * (num - i) + "*" * i )
#         print("\n")
