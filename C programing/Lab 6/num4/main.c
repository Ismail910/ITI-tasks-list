#include <stdio.h>
#include <stdlib.h>
#include <math.h>

typedef struct point
{
    int x;
    int y;
}point;
typedef struct line
{
    point start_line;
    point end_line;
}line;

void calc_length(line *L,int size)
{

    for(int i=0;i<size; i++)
    {
        printf(" Enter of Number Line %d Points : \n", i+1);
        scanf("%d",&L[i].start_line.x);
        scanf("%d",&L[i].start_line.y);
        scanf("%d",&L[i].end_line.x);
        scanf("%d",&L[i].end_line.y);
    }

    for(int i=0;i< size; i++)
    {
        int x_dif=(L[i].start_line.x)-(L[i].end_line.x);
        int y_dif=(L[i].start_line.y)-(L[i].end_line.y);
        x_dif=x_dif*x_dif;
        y_dif=y_dif*y_dif;
        int len=sqrt(x_dif+y_dif);
        printf("Line %d Length = %d\n",i+1,len);
    }
}

int main()
{
    int size;
    printf("Enter number of lines : ");
    scanf("%d",&size);

    line *L=malloc(size*sizeof(line));

    calc_length(L,size);


    return 0;
}
