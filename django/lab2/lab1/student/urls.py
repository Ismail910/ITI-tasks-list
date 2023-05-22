# from django.urls import path
# from .views import *
# urlpatterns=[
#     path('', view),
#     path('insert/', insert),
#     path('update/', update),
#     path('delete/', delete),



# ]

from django.urls import path,include
from .views import *
urlpatterns=[
path('insert',insert,name='studentadd'),
path('',list,name='studentlist'),
path('del/<int:id>',deleteview,name='studel'),
path('edit/<int:id>',editview,name='stuedit'),
]