#include <stdio.h>
#include <stdlib.h>

int main()
{
     int num1, num2;
    int sum, sub, mult, mod;
    float div;


    printf("Input any two numbers separated by comma : \n");
    scanf("%d %d", &num1, &num2);


    sum = num1 + num2;
    sub = num1 - num2;
    mult = num1 * num2;
    div = (float)num1 / num2;
    mod = num1 % num2;


    printf("The sum of the given numbers : %d\n", sum);
    printf("The difference of the given numbers : %d\n", sub);
    printf("The product of the given numbers : %d\n", mult);
    printf("The quotient of the given numbers : %f\n", div);
    printf("MODULUS = %d\n", mod);
    return 0;
}
/*int mai()
{
    int A, B, quotient = 0, remainder = 0;

    // Ask user to enter the two numbers
    printf("Enter two numbers A and B : \n");

    // Read two numbers from the user || A = 17, B = 5
    scanf("%d%d", &A, &B);

    // Calculate the quotient of A and B using '/' operator
    quotient = A / B;

    // Calculate the remainder of A and B using '%' operator
    remainder = A % B;

    // Print the result
    printf("Quotient when A/B is: %d\n", quotient);
    printf("Remainder when A/B is: %d", remainder);

    return 0;
}

int ma()
{
    int i = 255;

    printf("255 in hexadecimal = %x\n",i);

    return 0;
}
*/
