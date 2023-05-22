from django.urls import path
from .views import *

urlpatterns=[
    path('', view),
    path('list/', listStudent),
    path('listStaff/', listStaff),
    path('mainrepot/', mainrepot),



]