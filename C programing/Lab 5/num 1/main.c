#include <stdio.h>
#include <stdlib.h>
 int larg_num(int a ,int b,int c)
    {
    if(a>=b && a>=c)
    biggest=a;
    else if(b>=a && b>=c)
    biggest=b;
    else
    biggest=c;
    return biggest;
    }
int main()
{
    int biggest;

    larg_num(20,70,60);
    printf("Biggest number is: %d\n",biggest);
    return 0;
}


