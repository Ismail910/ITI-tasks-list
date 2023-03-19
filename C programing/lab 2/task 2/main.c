#include <stdio.h>
#include <stdlib.h>

int main()
{
    int num1;
    int num2;
    int num3;
     printf("Enter three integer: ");
     scanf("%d", &num1);
     scanf("%d", &num2);
     scanf("%d", &num3);
     if(num1 >= num2 && num1 >= num3)
     {
         printf("%d is the largest number.", num1);

     }else if (num2 >= num1 && num2 >= num3)
     {
         printf("%d is the largest number.", num2);
     }else
     {
         printf("%d is the largest number.", num3);
     }


}
