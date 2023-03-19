#include <stdio.h>
#include <stdlib.h>

void swap(int *a, int *b)
{
    int temp = *a;
    *a = *b;
    *b = temp;
}

int main()
{
    int x, y;

    printf("Enter Value of x ");
    scanf("%d", &x);

    printf("\nEnter Value of y ");
    scanf("%d", &y);

    swap(&x, &y);

    printf("\n Swapping: x = %d, y = %d", x, y);
    return 0;
}
