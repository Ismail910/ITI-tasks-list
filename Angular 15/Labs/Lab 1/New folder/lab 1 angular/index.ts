import  users from "./users.json";

// //************************ task 1 *********************
//   let namesTwo:string[] = []
//    users.map((user,index) => {
//     namesTwo [index]= user.username
//  }).sort()

 users.sort((a,b)=> a.username.localeCompare(b.username)  )
    console.log(users);

//************************ task 2 *********************

const x = users.filter( elm=> elm.address.geo.lat > "-37.1496" && elm.address.geo.lat < "81.1496"  &&
  elm.address.geo.lng > "-68.6102" && elm.address.geo.lng < "62.5342" )
  console.log(x);

//************************ task 3 *********************
 function getuser(users:any[]):any
 {  


       users.map((elm,index) => {

       })
       const data = []       
     for(let i=0;i<users.length;i++)
        {
            data[i]=`https://maps.google.com/?q=${users[i].address.geo.lat},${users[i].address.geo.lng}`
        }
        return data
 }
let arr!:string[]
arr =  users.map((user)=> `https://maps.google.com/?q=${user.address.geo.lat},${user.address.geo.lng}`)
 console.log(arr);

// ************************ task 4 *********************


abstract class Person
{
   protected _name!:string
   protected _address:string
   protected _phonenumber:number
   protected _email:string
    constructor(name:string,address:string,phonenumber:number,email:string)
    {
        this._name=name;
        this._address=address;
        this._phonenumber=phonenumber;
        this._email=email;
    }
    displayName()
        {
            console.log(` class name person  name is ${this.name}`)
        }
    set name(name:string){
        this._name = name;
    }
    get name():string{
        return this._name;
    }
}

const enum Status{
    FRSHMANE,
    sophomore,
    junior,
    senior
 }

class student extends Person
{
     student_status:Status
    constructor(student_status:Status,name:string,address:string,phonenumber:number,email:string)
    {
        super(name,address,phonenumber,email);
        this.student_status=student_status;
    }
    displayName()
        {
            console.log(` class name student  name is ${this.name}`)
        }
}
class Employee extends Person
{
     office:string
     salary:number
     date_hired:Date

    constructor(office:string,salary:number,date_hired:Date,name:string,address:string,phonenumber:number,email:string)
    {
        super(name,address,phonenumber,email);
        this.office=office;
        this.salary=salary;
        this.date_hired=date_hired;
    }
    displayName()
        {
            console.log(` class name Employee  name is ${this.name}`)
        }
}
class faculty extends Employee
{
    office_hours:string
    rank:string

    constructor(office_hours:string,rank:string,office:string,salary:number,date_hired:Date,name:string,address:string,phonenumber:number,email:string)
    {
        super(office,salary,date_hired,name,address,phonenumber,email);

        this.office_hours=office_hours;
        this.rank=rank;
    }
    displayName()
        {
            console.log(` class name faculty  name is ${this.name}`)
        }
}
class staff extends Employee
{
    tittle:string
    constructor(tittle:string,office:string,salary:number,date_hired:Date,name:string,address:string,phonenumber:number,email:string)
    {
        super(office,salary,date_hired,name,address,phonenumber,email);
        this.tittle=tittle;
    }
    displayName()
        {
            console.log(` class name staff  name is ${this.name}`)
        }
}

// var person=new Person("abdo","assuit",1491516647,"asd@gmail.com")
//  person.displayName();
//  let date: Date = new Date("2019-01-16");
//  var emplayee = new Employee("asd",1455,date,"abdo","assuit",1491516647,"asd@gmail.com")
//  emplayee.displayName();
