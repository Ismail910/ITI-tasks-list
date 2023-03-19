#include <stdio.h>
#include <stdlib.h>

int main()
{
   int num = 0;
   int tot=0 ;

     do
     {
          printf("Enter any numbers: ");
          scanf("%d", &num);
          tot += num ;

     }
     while(tot <= 100);

     printf("total is %d", tot);

}
