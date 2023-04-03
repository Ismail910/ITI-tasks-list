//////////////////////////num1////////////////////
// (function only_number (){

//     var 
//         rug = /^([A-Z|a-z]{1})+$/;
     

//      var  number= prompt("enter your letters  :");
//     if(rug.test(number) == false)
//     {   
//         while (rug.test(number) == false){
//             number = prompt("enter your letters :");
//         }
//     }
//     document.write("your letters  is: "+ number );

// }());
////////////////////num2//////////////////
// var interval;
// function Start_clock(){
    
//     interval = setInterval(function(){
//         var date = new Date();
//         console.log( date.toLocaleTimeString())
//     },1000);
   
// }
// function Stop_clock()
// {
//     clearInterval(interval); 
// }
//////////////////////////num3///////////////////////

//     var win1;

//     function openWin()
//     {   
     
//         win1=window.open('','_Blank','width=200,height=200,screenX=300,screenY=150');
//         win1.document.write("Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur excepturi vero corporis delectus fugiat, provident nostrum repellendus dignissimos neque sed consequatur hic quisquam ipsum. Consequuntur assumenda perspiciatis illo accusantium?");
    
//     }
//     function showWin()
//     {
//         var result=confirm("Are You Sure need open Item");
//         if(result == true)
//         {
//         setTimeout(openWin,2000);
//     }else{console.log("ok");}
    
// }

//     function closeWin(){
   
//         win1.close();
    
// }
//////////////////////////num4/////////////

// var url = location.href;
// function getUrl(){
//     var arr= url.split("name=",2);
//     var name = arr[1].split("&",1);
//    return name.toString();
// }
// getUrl();
// var welcom = document.getElementById("welcome").innerHTML = "Welcome" + " "+ getUrl();

///////////////////////////////num 5 ///////////////////////////

// function scrollPageTo()
// {
//  scrollBy(100,200)
// }

// var interval;
// function startClock()
// {
//  interval=   setInterval(scrollPageTo,1000);
// }
// startClock();

// function stop(){
//     clearInterval(interval);
// }

///////////////////////////////////////num 6////////////////
// var d1 = new Date(); //"now"
// var d2 = new Date(2023,06,30);  // some date
// var d3=new Date(d2.getFullYear()-d1.getFullYear(),d2.getMonth()-d1.getMonth(),d2.getDate()-d1.getDate());
// var diff = Math.abs(d1.getFullYear()-d2.getFullYear()); 

// console.log(d3);
// var deadline = new Date("June 30, 2023 23:00:00").getTime();
// var x = setInterval(function() {
// var now = new Date().getTime();
// var t = deadline - now;
// var year = Math.floor(t / (1000 * 60 * 60 * 24*30*12));
// var month = Math.floor(t / (1000 * 60 * 60 * 24*30));
// var days = Math.floor(t / (1000 * 60 * 60 * 24));
// var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
// var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
// var seconds = Math.floor((t % (1000 * 60)) / 1000);
// document.getElementById("demo").innerHTML = days + "d " 
// + hours + "h " + minutes + "m " + seconds + "s"+" mo "+month + " y " + year;
//     if (t < 0) {
//         clearInterval(x);
//         document.getElementById("demo").innerHTML = "EXPIRED";
//     }
// }, 1000);

//console.log(dathour);

//////////////////un7////////fun


var link = document.getElementById("link");

function func(){
    alert("think you for");
}

// window.addEventListener("beforeunload", (event) => {
//    alert("I am the 1st one.");
//   });

//   window.addEventListener("unload", (event) => {
//     alert("I am the 3rd one.");
//   });