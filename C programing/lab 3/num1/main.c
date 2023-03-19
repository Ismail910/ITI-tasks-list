#include <stdio.h>
#include <stdlib.h>

int main()
{
   int a[5],i,n;

     printf("Enter %d elements in the array : ", n);
    for(i=0;i<5;i++)
    {
        scanf("%d", &a[i]);
    }

    printf("\nElements in array are: ");
    for(i=0;i<5;i++)

    {
        printf("%d  ", a[i]);
    }

    return;
}
