#include <stdio.h>
#include <stdlib.h>
#include<windows.h>

COORD coord={0,0};
 void gotoxy(int x,int y)
 {
   coord.X=x;
   coord.Y=y;
   SetConsoleCursorPosition(GetStdHandle(STD_OUTPUT_HANDLE),coord);
 }


void SetColor(int ForgC)
 {
    WORD wColor;

    HANDLE hStdOut = GetStdHandle(STD_OUTPUT_HANDLE);
    CONSOLE_SCREEN_BUFFER_INFO csbi;

    if(GetConsoleScreenBufferInfo(hStdOut, &csbi))
    {
        wColor = (csbi.wAttributes & 0xF0) + (ForgC & 0x0F);
        SetConsoleTextAttribute(hStdOut, wColor);
    }
    return;
}
typedef struct employee{
    int ID;
    char name[20];
    int salary;
}employee;



void DisplayEmployee( employee emp){
    printf("Employee ID is: %d\n" ,emp.ID);
    printf("Employee NAME is: %s\n" ,emp.name);
    printf("Employee SALARy is: %d\n",emp.salary);

}
int main()
{
      employee e1;
    char s[3][10]={"new","display","Exit"},ch=-1;
    int c=0;
    do
    {

        if(ch==-32)
        {
            ch=getch();
            if(ch==72)
            {
                c--;
            }
            else if(ch==80)
            {
                c++;
            }
             else if(ch==77)
            {
                c=2;
            }
            else if(ch==75)
            {
                c=0;
            }
            else if(ch==71)
            {
                system("cls");
                c=0;
            }
            else if(ch==79)
            {
                system("cls");
                c=2;
            }

        }
        else if(ch==13&&c==0)
            {
                system("cls");
                 printf("Enter your ID\n");
                scanf("%d",&e1.ID);

                printf("Enter your NAME\n");
                scanf("%s",e1.name);

                printf("Enter your SALARY\n");
                scanf("%d",&e1.salary);
            }
        else if(ch==13&&c==1)
            {
                system("cls");
                DisplayEmployee(e1);
            }
        else if(ch==13&&c==2)
            {
                return 0;
            }
        if(c>=3) c=0;
        if(c<0) c=2;
       /* for(int i=0;i<3;i++){
            gotoxy(20,20+i);
            if(c==i&&ch!=13)
        {
            SetColor(3);

           printf("%s",s[i]);
        }else{
           SetColor(15);

           printf("%s",s[i]);
        }
        }
        */
        if(c==0&&ch!=13)
        {
            SetColor(3);
            gotoxy(20,20);
           printf("%s",s[0]);
           SetColor(15);
           gotoxy(20,21);
           printf("%s",s[1]);
           gotoxy(20,22);
           printf("%s\n",s[2]);
        }
        else if(c==1&&ch!=13)
        {

            gotoxy(20,20);
           printf("%s",s[0]);
           SetColor(3);
           gotoxy(20,21);
           printf("%s",s[1]);
           SetColor(15);
           gotoxy(20,22);
           printf("%s\n",s[2]);
        }
        else if(c==2&&ch!=13)
        {

            gotoxy(20,20);
           printf("%s",s[0]);
           gotoxy(20,21);
           printf("%s",s[1]);
           SetColor(3);
           gotoxy(20,22);
           printf("%s\n",s[2]);
           SetColor(15);
        }

    }while(ch=getch());
    return 0;
}







