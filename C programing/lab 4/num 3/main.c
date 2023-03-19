#include <stdio.h>
#include <stdlib.h>

int main()
{
    char ch = getch();

       if(ch == -32)
       {
           ch = getch();

           printf("Extanded: %d",ch);

       }else
       {
            printf("normal: %d",ch);
       }
    return 0;

}
