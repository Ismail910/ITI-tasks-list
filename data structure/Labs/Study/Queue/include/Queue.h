#ifndef QUEUE_H
#define QUEUE_H

typedef struct node node;
struct node
{
    int Data;
    int *next ;
};
typedef struct Queue
{

    node *front , *rare;
} Queue;

void EnQueue(Queue * que ,int data)
{
    node *newnode = (node*)malloc(sizeof(node));
    newnode->Data = data;
    newnode->next = NULL;
    if(que->front == NULL)
    {
        que->front = que->rare = newnode;
    }else
    {
        que->rare->next = newnode;
        que->rare = newnode;
    }


}





#endif // QUEUE_H
