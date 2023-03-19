#include <stdio.h>
#include <stdlib.h>

int main()
{
 int **degree ,student =0, subject = 0;
 printf("Enter number of students: ");
 scanf("%d",&student);
 printf("Enter number of subject: ");
 scanf("%d",&subject);

 int *sum =(int)malloc(student * sizeof(int));
 int *average = (int) malloc(subject * sizeof(int));

    degree = (int*) malloc(student *sizeof(int));
 for(int i =0; i< student; i++)
 {
     degree[i] =(int*)malloc(student * sizeof(int));
 }

 for(int i =0;i<student;i++)
 {
     for(int j =0; j<subject;j++)
     {
         printf("student (%d): Enter degree of subject %d : ", (i+1),(j+1));
         scanf("%d",&degree[i][j]);
     }
 }

for(int i= 0;i<student; i++)
{
    sum[i]=0;
    for(int j=0;j<subject; j++)
    {
        sum[i] += degree[i][j];
    }
}

for(int i=0; i< student; i++)
{
    printf("Sum student (%d): %d \n",i+1,sum[i]);

}


for(int i= 0;i<student; i++)
{
    average[i]=0;

    for(int j=0;j<subject; j++)
    {
        average[i] += degree[i][j];
    }
    average[i] /=student;
}

for(int i=0; i< student; i++)
{
    printf("Average student (%d): %d \n",i+1,average[i]);

}



return 0;
}
