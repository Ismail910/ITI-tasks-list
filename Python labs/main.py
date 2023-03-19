from person import Person
from Employee import Employee
from office import Office

employees = []
employees.append(Employee("ahmed",10000,10,200))
employees.append(Employee("joe",10000,10,200))


of1=Office("it",employees)
print(of1.get_All_employees())



