#include <stdio.h>
#include <stdlib.h>

int main()
{
   int rows,cols,average,s=0;

    printf("Enter number of rows : ");
    scanf("%d",&rows);
    printf("Enter number of columns : ");
    scanf("%d",&cols);
    int matrix[rows][cols];
    int sum[rows];
    int avg[cols];


    //user enter matrix
    printf("Enter matrix elements : ");
    for(int i=0;i<rows;i++)
    {
        for(int j=0;j<cols;j++)
        {
            scanf("%d",&matrix[i][j]);
        }
    }

    //show entered matrix
    printf("The Matrix : \n");
    for(int i=0;i<rows;i++)
    {
        for(int j=0;j<cols;j++)
        {
            printf("%d ",matrix[i][j]);
        }
        printf("\n");
    }




    //make sum array inialized to zero
    for(int i=0;i<cols;i++)
    {
        sum[i]=0;
    }

    //claculate sum
    for(int i=0;i<rows;i++)
    {
        for(int j=0;j<cols;j++)
        {
            sum[i]+=matrix[i][j];
        }
    }

    //calculate average
    for(int i=0;i<cols;i++)
    {
        for(int j=0;j<rows;j++)
        {
            s+=matrix[j][i];
        }
        average=s/rows;
        avg[i]=average;
        average=0;
        s=0;
    }

    //print sum array
    printf("Sum : \n");
    for(int i=0;i<rows;i++)
    {
        printf("  %d",sum[i]);
    }
    printf("\n");

    //print average array
    printf("Average : \n");
    for(int i=0;i<cols;i++)
    {
        printf("  %d",avg[i]);
    }

    return ;
}
