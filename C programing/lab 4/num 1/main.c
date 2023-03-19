#include <stdio.h>
#include <stdlib.h>

int main()
{
 char firstname[10], lastname[10];

    printf("Input your firstname: ");
    scanf("%s", firstname);
    printf("Input your lastname: ");
    scanf("%s", lastname);
    printf("%s %s ", firstname, lastname);
    return 0;
}
