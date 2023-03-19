#ifndef LINKEDLIST_H
#define LINKEDLIST_H


typedef struct node node ;
struct node
{
    int Data;
    node *next, *prives ;
};

typedef struct linlist
{
    node *head , *tale;
}linlist;
//node *head = NULL, *tale = NULL;
void add (linlist *mylist, int data)
{
 node *new_node = malloc(sizeof(node));
 new_node->Data = data;
 new_node->next = NULL;
 new_node->prives = NULL;
 if(mylist->head == NULL)
 {
      mylist->head = mylist->tale = new_node;

 }

    if (mylist->head != NULL)
    {
        mylist->tale->next = new_node;
        new_node->prives = mylist->tale;
        mylist->tale = new_node;
    }
};

void display(linlist * lis)
{
   node *current = lis->head;
   while(current != NULL)
   {
       printf("%d  \t", current->Data);
       current = current->next;
   }
    printf("\n");
}
node*  GetNodeByData(linlist* lis, int data)
{

     node *current = lis->head;

    while(current != NULL)
    {
        if(data == current->Data)
            return current;
            current = current->next;
    }
    return NULL;
}




void Remove(linlist *lis , int data)
{
    node *Node = GetNodeByData(lis , data);
    if(Node == NULL)
        return ;
    if(Node == lis->head)
    {
        if(lis->head == lis->tale)
        {
            lis->head = lis->tale = NULL;
        }else
        {
            lis->head = lis->head->next;
            lis->head->prives = NULL;
        }
    }else if(Node == lis->tale)
    {
        lis->tale = lis->tale->prives;
        lis->tale->next = NULL;
    } else
    {
        Node->prives->next = Node->next;
        Node->next->prives = Node->prives;
    }
    free(Node);
}

void InsertAfter(linlist *lis, int data, int afterdata)
{
    node *Node = GetNodeByData(lis , afterdata);
    node *newnode = malloc(sizeof(node));
    newnode->Data = data;
    newnode->next = newnode->prives = NULL;
    if(Node == NULL)
        return;
    if(Node->next == NULL)
    {
        add( lis , data);
        return;
    }else
    {
        newnode->prives = Node;
        newnode->next = Node->next;
        Node->next->prives = newnode;
        Node->next = newnode;
    }
}

int GetDataByIndex(linlist *lis, int index)
{
    node *current = lis->head;
    int countr = 0;
    while(current != NULL)
    {
        if(countr == index)
        {
            return current->Data;
        }else
        {
            current = current->next;
            countr++;
        }

    }
}

int GetCount(linlist *lis)
{
    int counter = 0;
    node *current = lis->head;
    while(current != NULL)
    {
        current = current->next;
        counter++;
    }
    return counter;
}

node* Reverse(linlist *lis)
{



}



//void InPlaceReverse(linlist *lis)
//{
/*node *current = lis->head;
    if(current == lis->tale)
        return;
    else
    {
        current->next->prives = NULL;
        current->prives = current->next
        current->next->next = current;
        current->next = */

        /*Node *Current =head;
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
      tail=Temp2;*/
      void InPlaceReverse(linlist *lis)
{
       node * current = lis->head;
        node *Temp1 = malloc(sizeof(node));
        Temp1->next = Temp1->prives = NULL;
        node *Temp2 = malloc(sizeof(node));
        Temp2->next = Temp2->prives = NULL;
        while(current != NULL)
        {
            Temp1 = current->prives;
            current->prives = current->next;
            current->next = Temp1;
            current= current->prives;
        }
        Temp2 =lis->head;
       lis->head = Temp1->prives;
       lis->tale = Temp2;
       lis->tale->next=NULL;

}

#endif // LINKEDLIST_H
