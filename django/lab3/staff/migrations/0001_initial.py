# Generated by Django 4.2 on 2023-04-24 14:53

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Staff',
            fields=[
                ('id', models.AutoField(primary_key=True, serialize=False)),
                ('firstName', models.CharField(max_length=50)),
                ('lastName', models.CharField(max_length=50)),
                ('email', models.EmailField(max_length=254)),
                ('password', models.CharField(max_length=20)),
                ('city', models.CharField(max_length=20)),
                ('country', models.CharField(max_length=20)),
            ],
        ),
    ]
