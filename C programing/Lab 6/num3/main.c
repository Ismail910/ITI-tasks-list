#include <stdio.h>
#include <stdlib.h>

typedef struct point {
    int x, y;
}point;
typedef struct line {

 point startline;
 point endline;
}line;
//declare function (line * l
                    //l->startline.x=nx;
void change_Position( line *L, int nx, int ny)
{
    L->startline.x=nx;

    L->endline.y=ny;

}

int calc_length(line *l)
{
    int x_dif=(l->endline.x)-(l->startline.x);
    int y_dif=(l->endline.y)-(l->startline.y);

    x_dif=x_dif*x_dif;
    y_dif=y_dif*y_dif;
    int len=sqrt(x_dif+y_dif);

   return len;
}


int main()
{

//declare line L
  line L ;
//initalize point inside line
 L.startline.x=10;
 L.startline.y=15;
 L.endline.x=20;
 L.endline.y=25;

    printf("Old Line Points \n");
    printf("(%d,%d)\t(%d,%d)",L.startline.x,L.startline.y, L.endline.x, L.endline.y);


int nx, ny;
printf("\n enter a new pinter X: ");
scanf("%d",&nx);
//scan new init
printf("enter a new pinter y: ");
scanf("%d",&ny);
//l.startline.x=nx;
//call function
 change_Position( &L, nx, ny);
    printf("\n\n----New Line Points---- \n");
    printf("(%d,%d)\t(%d,%d)",L.startline.x,L.startline.y, L.endline.x, L.endline.y);

    int len=calc_length(&L);
    printf("\nLine Length = %d",len);

    return 0;
}
