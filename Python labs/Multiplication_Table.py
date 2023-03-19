def Multiplication_Table():
    num = int(input("Enter your number: "))
    for i  in range(0,num):
        for n in range(i):
            print(i , "x" , n , "=" , i*n )
Multiplication_Table()


