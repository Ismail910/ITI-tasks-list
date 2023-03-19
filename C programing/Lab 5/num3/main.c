#include <stdio.h>
#include <stdlib.h>

struct Employee
{
    int id;
    int salary;
    char Name[20];

};
int main()
{


    struct Employee e = {{1, 1500, "All"},{2, 1000, "Ali"},{3, 2000, "Ahmed"}};

   printf("Enter the id of the Employee: ");
    scanf("%d", &e.id);

    printf("Enter the Salary of the Employee: ");
    scanf("%d", &e.salary);

    printf("Enter the Name of the Employee: ");
    scanf("%s", &e.Name);

    printf("\nEmployee Details:\n");
    printf("Employee Id: %d\n", e.id);
    printf("Employee Name: %s\n", e.Name);
    printf("Employee salary: %d\n", e.salary);


    return 0;
}
