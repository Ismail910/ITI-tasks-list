#include <stdio.h>
#include <stdlib.h>
typedef struct Employee
{
    char Name[15];
    int ID;
    float Salary;
} Employee;

int main()
{
    Employee *Emp[3];
    int size[3];

    for(int i=0; i< 3; i++)
    {
        printf("Enter the pointer of Employee:  " );
        scanf("%d",&size[i]);


        Emp[i]= malloc(*size * sizeof(Employee));

        printf("Pointer Data %d: \n", i+1);

    for(int j= 0 ; j<size[i] ; j++)
    {
         printf("\n Enter ID of Pointer (%d) (%d)",i+1, j + 1);
         scanf("%d",&Emp[i][j].ID);
          printf("\n Enter Name of Pointer (%d)(%d) ",i+1,  j + 1);
         scanf("%s",Emp[i][j].Name);
          printf("\n Enter Salary of Pointer (%d)(%d) ",i+1,  j + 1);
         scanf("%f",&Emp[i][j].Salary);

    }
    }
    printf("\n");

    for(int i=0; i< 3; i++)
    {
        printf("\n ditils of Employee :(%d): \n", i+1);
        for(int j=0; j<size[i] ;j++)
        {
            printf("%d \t",Emp[i][j].ID);
             printf("%s \t",Emp[i][j].Name);
              printf("%f \t",Emp[i][j].Salary);
        }

    }
    return 0;
}
