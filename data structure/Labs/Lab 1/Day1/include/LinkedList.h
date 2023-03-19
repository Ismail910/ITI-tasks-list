#ifndef LINKEDLIST_H
#define LINKEDLIST_H

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

//void Add(LinkedList *myList, int data)

void Add(int data)
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
    printf("\n");
}

Node* GetNodeByData(int data)
{
    Node *current = head;

    while(current != NULL)
    {
        if(data == current->Data)
            return current;

        current = current->Next;
    }

    return NULL;
}

void Remove(int data)
{
    Node *node = GetNodeByData(data);

    if(node == NULL)
        return;

    if(node == head)
    {
        if(head == tail)
        {
            head = tail = NULL;
        }
        else
        {
           head =  head->Next;
           head->Prev = NULL;
        }
    }
    else if(node == tail)
    {
        tail = tail->Prev;
        tail->Next = NULL;
    }
    else
    {
        node->Prev->Next = node->Next;
        node->Next->Prev = node->Prev;
    }

    free(node);
}

void InsertAfter(int data, int afterData)
{
  Node *nodeBe= GetNodeByData(afterData);
  Node *newNode = malloc(sizeof(Node));
  newNode->Data = data;
  newNode->Prev = newNode->Next = NULL;
   if(nodeBe== NULL)
        return;
 if(nodeBe->Next==NULL)
  {
      Add(data);
      return;
  }
 else
    {
      newNode->Prev=nodeBe;
      newNode->Next=nodeBe->Next;
      nodeBe->Next->Prev=newNode;
      nodeBe->Next=newNode;
    }

}

int GetDataByIndex(int index)
{
    Node *current=head;
    int counter=0;
    while(current!=NULL)
    {
        if(counter==index)
            return current->Data;
        counter++;
        current=current->Next;
    }

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


Node* Reverse()
{

}

void InPlaceReverse()
{
  Node *Current =head;
  Node *Temp=malloc(sizeof(Node));
  Temp->Next=Temp->Prev=NULL;
  Node *Temp2=malloc(sizeof(Node));
  Temp2->Next=Temp2->Prev=NULL;
  while(Current!=NULL)
  {
      Temp=Current->Prev;
      Current->Prev=Current->Next;
      Current->Next=Temp;
      Current=Current->Prev;
  }
  Temp2=head;
  head=Temp->Prev;
  tail=Temp2;
}


#endif // LINKEDLIST_H
