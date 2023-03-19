#include <stdio.h>
#include <stdlib.h>
typedef struct node node;
struct node
{
	int data;
	 node* next;
};
 node *f = NULL;
 node *r = NULL;

void enqueue(int d)
{

    node* n = ( node*)malloc(sizeof( node));
	n->data = d;
	n->next = NULL;
	if((r==NULL)&&(f==NULL))
	{
		f = r = n;
		r->next = f;
	}
	else
	{
		r->next = n;
		r = n;
		n->next = f;
	}
}
void dequeue()
{

	 node* t = f;
	if((f==NULL)&&(r==NULL))
		return 0;
	else if(f == r){
		f = r = NULL;
		free(t);
	}
	else{
		f = f->next;
		r->next = f;
		free(t);
	}


}

int prek()
{
    if(f== NULL && r==NULL)
    {
        return 0;
    }else
    {
       return f->data;
    }


}

void print(){
	 node* t;
	t = f;
	if((f==NULL)&&(r==NULL))
		printf("\nQueue is Empty");
	else{
		do{
			printf("\n%d",t->data);
			t = t->next;
		}while(t != f);
	}
}
int main()
{
    enqueue(10);
    enqueue(20);
    enqueue(30);
    enqueue(40);
	print();
	printf("\n/////////////////\n");
	dequeue();
	//dequeue();
	enqueue(50);
	print();
	printf("\n/////////////////\n");
	int n;
	n = prek();
	if(n == 0)
    {
         printf("Queue is empty");
    }else
    {
         printf("front = %d", n);
    }





return 0;
}
