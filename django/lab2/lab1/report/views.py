from django.shortcuts import render
from django.http import HttpResponse,JsonResponse,HttpResponseRedirect
# Create your views here.
#views

def view(req):
     if(req.method=='GET'):
        res= HttpResponse('home view')
        res.write('<h1>Day1<h1>')
        res['content-type']='text/plain'
        res.set_cookie('id',1)
        return res


def listStudent(req):
     return HttpResponseRedirect('/student')
def listStaff(req):
     return HttpResponseRedirect('/staff')

def mainrepot(req):
    return render(req,'report/link.html')