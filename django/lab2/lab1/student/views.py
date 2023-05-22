from django.shortcuts import render,redirect
from django.http import HttpResponse
from .models import *
from staff.models import Staff
# Create your views here.
def deleteview(r,id):
   Student.objects.filter(id=id).delete()
   context = {}
   context['students'] = Student.objects.all()
   return render(r, 'student/list.html', context)
def editview(r,id):
   if(r.method=='GET'):
      b1=Student.objects.get(id=id)
      staff=Staff.objects.all()
      context={'student':b1}
      return render(r, 'student/add.html',{'staffs':staff})
   else:
      Student.objects.filter(id=id).update(name=r.POST['studentname'],
                                           superVisiorobj=Staff.objects.get(id=r.POST['staffid']))
      return redirect('/student/')
def list(r):
   context={}
   context['students']=Student.objects.all()
   return render(r,'student/list.html',context)
def insert(r):
   #book1=Book(name='book1',authorobj=Author.objects.get(id=1))
   #book1.save()
   #Book.objects.create(name='book2',authorobj=Author.objects.get(id=2))
   if(r.method=="GET"):
      staff=Staff.objects.all()
      return render(r,'student/add.html',{'staffs':staff})
   else:
      Student.objects.create(
         name=r.POST['studentname'],
         superVisiorobj=Staff.objects.get(id=r.POST['staffid'])
      )
      return redirect('/student/')