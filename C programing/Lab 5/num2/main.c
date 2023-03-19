#include <stdio.h>
#include <stdlib.h>

int main()
{

	char id[10];
	double value, salary;
	printf("Input the Employees: ");
	scanf("%s", &id);
	printf("\nSalary amount/hr: ");
	scanf("%f", &value);
	salary = value ;
	printf("\nEmployees ID = %s\nSalary = Egy$ %.0f\n", id,salary);

    return 0;
}
