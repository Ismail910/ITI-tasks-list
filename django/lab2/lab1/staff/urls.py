# from django.urls import path,include
# from .views import *
# urlpatterns=[
# path('insert',insert,name='studentadd'),
# path('',list,name='studentlist'),
# path('del/<int:id>',deleteview,name='studel'),
# path('edit/<int:id>',editview,name='stuedit'),
# ]
from django.urls import path,include
from .views import *
urlpatterns=[
    path('insertt',addstaff,name='addstaffname'),
    path('',list,name='liststaffname'),
    path('del/<int:id>',deleteview,name='staffdel'),
    path('edit/<int:id>',editview,name='staffedit'),
]