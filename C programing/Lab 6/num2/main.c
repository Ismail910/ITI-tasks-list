#include <stdio.h>
#include <stdlib.h>
 int multimap(int *ptr,int size)
    {

        for (int i = 0; i < size; i++) {

            ptr[i]*=10;
        }
    }
int main()
{
    int arr[5] = { 1, 2, 3 ,4,5};
    multimap(arr, 5);

  for (int i = 0; i <= 4; i++) {
    printf("Value of ptr index: %d= %d\n",i+1, arr[i]);
        }
    return 0;
}
