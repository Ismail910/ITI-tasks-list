from django.shortcuts import render,redirect
from django.http import HttpResponse
from .models import *
# Create your views here.
def list(r):
    #get all authors
    staff=Staff.objects.all()
    #render list.html
    return render(r,'staff/list.html',{'staffs':staff})
def addstaff(r):
    if(r.method=='GET'):
        return render(r,'staff/add.html')
    else:
        Staff.objects.create(name=r.POST['staffname'])
        return redirect('/staff/')

def deleteview(r,id):
   Staff.objects.filter(id=id).delete()
   context = {}
   context['staffs'] = Staff.objects.all()
   return render(r, 'staff/list.html', context)
def editview(r,id):
   if(r.method=='GET'):
      b1=Staff.objects.get(id=id)
    #   staff=Staff.objects.all()
    #   context={'student':b1}
      return render(r, 'staff/add.html')
   else:
      Staff.objects.filter(id=id).update(name=r.POST['staffname'])
      return redirect('/staff/')