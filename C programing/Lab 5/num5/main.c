#include <stdio.h>
#include <stdlib.h>
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

int main(){
     employee e1;
    printf("Enter your ID\n");
    scanf("%d",&e1.ID);

   printf("Enter your NAME\n");
    scanf("%s",e1.name);

    printf("Enter your SALARY\n");
    scanf("%d",&e1.salary);

    DisplayEmployee(e1);


    return 0;
}
