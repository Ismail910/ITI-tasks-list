#include <stdio.h>
#include <stdlib.h>

int sumofarray(int a[],int n)
 {
 	int max,i;
 	max=a[0];
    for(i=1; i<n; i++)
    {
		   if(max<a[i])
		    max=a[i];
    }


    printf("\nmaximum of array is : %d",max);
 }
int main()
{
    int a[5],i,n,sum;

    printf("Enter size of the array : ");
    scanf("%d", &n);


    for(i=0; i<n; i++)
    {
        scanf("%d",&a[i]);
    }
    sumofarray(a,n);


}
