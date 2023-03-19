#include <stdio.h>
#include <stdlib.h>
typedef struct Node Node;

struct Node
{
    int Data;
    Node *Prev, *Next;
};

typedef struct LinkedList
{
    Node *head, *tail;

}LinkedList;

Node *head = NULL, *tail = NULL;

void swap(int *f, int *s)
{
    int temp= *f;
    *f=*s;
    *s=temp;
}

void Add( int data)
{

    Node *newNode = malloc(sizeof(Node));
    newNode->Data = data;
    newNode->Prev = newNode->Next = NULL;

    if(head == NULL)
    {
        head = tail = newNode;
    }
    else
    {
        tail->Next = newNode;
        newNode->Prev = tail;
        tail = newNode;
    }
}

void Display()
{
    Node* current = head;

    while(current != NULL)
    {
        printf("%d   ", current->Data);
        current = current->Next;
    }
    printf("\n------------------------\n");
}

int GetCount()
{
    Node *current=head;
    int counter=0;
    while(current!=NULL)
    {
        counter++;
        current=current->Next;
    }
    return counter;
}




int GetNodeByData(int index)
{
    Node *current = head;
    int counter = 0;
    while (current != NULL) {
        if (counter == index){
            return (current->Data);
        }else{
            counter++;
            current = current->Next;
        }
    }
    printf( "not found\n" );
}

void bubbleSort(LinkedList *l)
{

    int sort=0;
    Node *current = l->head;
    int count = GetCount(l);

   for (int i=0;i<count-1&&sort==0;i++)
   {
       sort=1;
    while(current->Next != NULL)
    {
        if(current->Data > current->Next->Data)
        {
            swap(&current->Data,&current->Next->Data);
            sort=0;
        }
        current=current->Next;
    }
    current = l->head;
    }
}

int BinarySearch(int data, int numOfNode)
{
    int minIndex = 0, maxIndex = numOfNode -1, midIndex;
    while(maxIndex >= minIndex)
    {
        midIndex = (minIndex + maxIndex) / 2;
        int item = GetNodeByData(midIndex);
        if(data == item)
        {
            return midIndex;
        }else if(data > item)
        {
            minIndex = midIndex + 1;
        }else
        {
            maxIndex = midIndex -1;
        }
    }
    return -1;
}


int main()
{

   LinkedList *myList = &head;

    Add(4);
    Add(2);
    Add(1);
    Add(5);
    Add(3);
    Add(6);
    Display();

    bubbleSort(myList);

    Display();

    int List = GetCount();

   int x = BinarySearch(3, List);


         printf("index = %d", x);



    return 0;
}
