#ifndef QUEUE_H
#define QUEUE_H
typedef struct Node Node;
struct Node
{
    int data;
    Node *Next;
};
typedef struct  Queue
{
    Node *front,*rear;
}Queue;


void enqueue(Queue *q,int n)
{
    Node *newnode=(Node*)malloc(sizeof(Node));
    newnode->data=n;
    newnode->Next=NULL;
    if(q->front==NULL)
    {
        q->front=q->rear=newnode;

    }
    else
    {
        q->rear->Next=newnode;
        q->rear=newnode;
    }
}

int dequeue(Queue*q,int *n)
{
    if(q->front==NULL)
    {
        return 0;
    }
    *n=q->front->data;
    q->front=q->front->Next;
    return 1;
}

int peak(Queue*q,int *n)
{
    if(q->front==NULL)
    {
        return 0;
    }
    *n=q->front->data;
    return 1;
}


#endif // QUEUE_H
