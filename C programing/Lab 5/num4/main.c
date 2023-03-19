#include <stdio.h>
#include <stdlib.h>

typedef struct Date
{
    int day, month, year;
}Date;

struct Employee
{
    int id;
    int salary;
    char Name[20];
    Date Birthdate;
};
typedef struct Employee Employee;
int main()
{
    Employee e []= {{1, 1500, "All",{27,12,1994}},{2, 1000, "Ali",{2,12,2004}},{3, 2000, "Ahmed",{17,12,1999}}};

   //Employee e = {.Salary = 1500, .Birthdate = {.month = 10}};
    //scanf("%d", &e.ID);

    //e.Birthdate.day = 10;
    //Date date;
    /*Employee e = {1, 1500, "Ali", {11,10,2022}};
   printf("Enter the id of the Employee: ");
    scanf("%d", &e.id);

    printf("Enter the Salary of the Employee: ");
    scanf("%d", &e.Salary);

    printf("Enter the Name of the Employee: ");
    scanf("%s", &e.Name);*/
for(int i = 0; i <= 2 ;i++)
{
    printf("\nEmployee Details:\n");
    printf("Employee Id: %d\n", e[i].id);
    printf("Employee Name: %s\n", e[i].Name);
    printf("Employee salary: %d\n", e[i].salary);
    printf("Employee Date: %d-%d-%d\n", e[i].Birthdate.day,e[i].Birthdate.month,e[i].Birthdate.year);

}
    return 0;
}
