#include <stdio.h>
#include <stdlib.h>
#include "LinkedList.h"


int main()
{
    //LinkedList myList = {.head = NULL, .tail = NULL};
    //Add(&myList, 3);

    Add(3);
    Add(5);
    Add(7);
     Remove(7);
    Add(9);
    printf("the values\n");
    Display();
    InsertAfter(4,5);
    int x=GetDataByIndex(1);
    int y=GetCount();
    printf("the index after insert 4\n");
    Display();
    printf("the index %d\n",x);
    printf("the count  %d\n",y);
    InPlaceReverse();
    Display();
    Add(15);
    Display();
    return 0;
}
