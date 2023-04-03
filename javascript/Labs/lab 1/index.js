
/////////////num1//////////////
// alert("Welcome to my site");
// var print = prompt("enter ypur name");
// document.getElementById("divOne").innerHTML= "Hello "+print;

///////////////////////////////num2///////////////////////////////////

function cToF(celsius) 
{
 
  var cToFahr = celsius * 9 / 5 + 32;
  var message = celsius+'\xB0C is ' + cToFahr + ' \xB0F.';
    console.log(message);
}
cToF(60);
//////////////////
function fToC(fahrenheit) 
{
 
  var fToCel = (fahrenheit - 32) * 5 / 9;
  var message = fahrenheit+'\xB0F is ' + fToCel + '\xB0C.';
    console.log(message);
} 
fToC(45);
///////////////////////////////////num3/////////////

// function Lthan(a,b,c)
// {
//     if(a >b && a > c )
//     {
//         return a;
//     }else if (b > a && b > c)
//     {
//         return b;
//     }else{
//         return c;
//     }
// }
// console.log( Lthan(40,20,30));
/////////////////////////////////num 4//////////////////

// function table(a)
// {
//     var size = 9
//     for(var i = 0; i <= size; i++)
//     {
//         var res = a * i
//         console.log(`${a}  * ${i}  =  ${res} `);
//     }
// }
//  table(5);
////////////////////////////////num 5 ///////////////////////

let person = {
        "firstName" : "Ahmed",
        "LastName": "Mohamed",
        "isActive": true
    }
    console.log(person.firstName = "Ali");