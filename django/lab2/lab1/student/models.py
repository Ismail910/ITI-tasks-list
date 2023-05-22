from django.db import models
from staff.models import *
# Create your models here.
class Student(models.Model):
    id=models.AutoField(primary_key=True,db_column='ID')
    name=models.CharField(max_length=50)
    superVisiorobj=models.ForeignKey(to='staff.Staff',on_delete=models.CASCADE)