#ifndef STACK_H
#define STACK_H


typedef struct Node Node;

struct Node
{
    int Data;
    Node *Next;
};

typedef struct LinkedList
{
    Node *top;

}LinkedList;

Node *top = NULL;

void push (int Data)
{
    Node *newNode = malloc(sizeof(Node));
    if(newNode == NULL)
        return;
    newNode->Data = Data;
    newNode->Next = top;
    top = newNode;
}
int pop ()
{
   Node *temp = top;
   if(temp == NULL)
    return;
   top= top->Next;
   free(temp);
   return;

}
void Display()
{
    Node* current = top;

    while(current != NULL)
    {
        printf("%d   ", current->Data);
        current = current->Next;
    }
    printf("\n");
}



#endif // STACK_H
