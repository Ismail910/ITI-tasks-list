#include <stdio.h>
#include <stdlib.h>
#include "Queue.h"
int main()
{
    Queue que = {.front = NULL , .rare = NULL};

    EnQueue(&que , 10);
    EnQueue(&que , 20);
    EnQueue(&que , 30);
    EnQueue(&que , 40);

    return 0;
}
