#include <stdio.h>
#include <stdlib.h>


#include "LinkedList.h"

int main()
{
    linlist mylist = {.head = NULL , .tale = NULL};
    add(&mylist , 10);
    add(&mylist , 20);
    add(&mylist , 30);
    add(&mylist , 40);
    add(&mylist , 50);
//    printf("the values: \n");
//    display(&mylist);
//    Remove(&mylist ,30);
//    printf("the values after Remove:\n");
//    display(&mylist);
//    InsertAfter(&mylist,15, 20);
//    printf("the values after insert after:\n");
//    display(&mylist);
//     int index = GetDataByIndex(&mylist, 1);
//     printf("-------------------------The Index is =  %d\n", index);
//     int count = GetCount(&mylist);
//     printf("-------------------------The Count is =  %d\n", count);
   InPlaceReverse(&mylist);
    printf("the values after InPlaceReverse:\n");
    display(&mylist);
    //Reverse(&mylist);
    return 0;
}
