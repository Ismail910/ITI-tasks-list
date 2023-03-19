#include <stdio.h>
#include <stdlib.h>

int main()
{
    char grade;
    printf("Enter your garade \n");
    grade=getch();
    switch(grade){
    case 'A':
        printf("Excellent");
        break;
    case 'B':
        printf("Very Good");
        break;
    case 'C':
        printf("Good");
        break;
    case 'D':
        printf("Fair");
        break;
    case 'E':
        printf("Faild");
        break;
    default:
        printf("Plz, Enter correct grade! \n");
    }


    return 0;
}
