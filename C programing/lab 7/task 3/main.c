#include <stdio.h>
#include <stdlib.h>

int main()
{
    int sum=0,avg=0,c,r,maxc=0,numberstudent=0;
    printf("enter number of student");
    scanf("%d",&r);
    int **student=malloc(r*sizeof(int*));
    int sizee[r];
    for(int i=0;i<r;i++)
    {
        printf("enter number of subject for student %d ",i +1);
        scanf("%d",&c);
        if(c>maxc)
            maxc=c;
        sizee[i]=c;
        student[i]=malloc(c*sizeof(int));
    }
    for(int i=0;i<r;i++)
    {
        printf("enter grades student %d \n",i);
        for(int j=0;j<sizee[i];j++)
        {
           scanf("%d",&student[i][j]);
        }
    }
    for(int i=0;i<r;i++)
    {

        for(int j=0;j<sizee[i];j++)
        {
            sum+=student[i][j];
        }
        printf("sum grades student %d = %d \n",i,sum);
        sum=0;
    }
     for(int i=0;i<maxc;i++)
    {

        for(int j=0;j<r;j++)
        {
            if(i<sizee[j])
            {
                avg+=student[j][i];
                numberstudent++;
            }


        }
        printf("average of each subject %d = %d \n",i,avg/numberstudent);
        avg=0;
        numberstudent=0;
    }
    return 0;
}
