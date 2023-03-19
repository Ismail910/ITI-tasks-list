#include <stdio.h>
#include <stdlib.h>
#include<windows.h>
COORD coord={0,0};
void gotoxy(int x,int y)
     {
       coord.X=x;
       coord.Y=y;
       SetConsoleCursorPosition(GetStdHandle(STD_OUTPUT_HANDLE),coord);
     };
int main()
{
   char chara;
    do{
            printf("\n Choose in the menu: ");
            gotoxy(50,5);
            printf("new");
            gotoxy(50,10);
            printf("desplay");
            gotoxy(50,15);
            printf("Exit");
            scanf("%c", &chara);


   /* if(chara == 'N')
    {
        system("cls");
        printf("New");
    }else if(chara == 'D')
    {
        system("cls");
        printf("Desplay");
    }else{

    }*/
    switch(chara){
    case 'N':
        system("cls");
        printf("New");
        break;
    case 'D':
        system("cls");
        printf("Display");
        break;
    default:
        break;
    }
    getch();
    }while(chara != 'E');

}
