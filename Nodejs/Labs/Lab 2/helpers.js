const fs = require("fs")
const readfile = fs.readFileSync('./todo.json','utf-8');
const todoList = JSON.parse(readfile)

function added(data) {
   console.log(data); 
//    const len= todoList.map(ele => ele.id);
//    var lengthId = len.length ;
//    console.log(lengthId); 

   const length=(todoList[todoList.length-1].id)+1;
   
    const userOfData = {
       
        id:length,
        body:data.body,
        title:data.title,
        checked: false
    }
    const exits = fs.existsSync('./helpers.js');
   if (exits) {
        todoList.push(userOfData);
        // if (readfile == "") {
        //     fs.writeFileSync('./todo.json', JSON.stringify([]));
        //     fs.writeFileSync('./todo.json', JSON.stringify(todoList));
        // }
        fs.writeFileSync('./todo.json', JSON.stringify(todoList));
    }else{
        fs.writeFileSync('tpdo.json',JSON.stringify([]));
    }
 
}



function edit(data) {
    //console.log(data); 

         todoList.map(ele => {
        if(ele.id == data.id)
        {
           // console.log(ele);
            ele.title = data.title;
            ele.body =data.body;
            ele.checked = false
            fs.writeFileSync('./todo.json', JSON.stringify(todoList, null ,2));
        }
       // console.log(ele);
    }); 
}



function check(data) {
         todoList.map(ele => {
        if(ele.id == data.id)
        {
           
            ele.checked = data.check;
            fs.writeFileSync('./todo.json', JSON.stringify(todoList));
        }
    }); 
}




function UnCheck(data) {
    todoList.map(ele => {
   if(ele.id == data.id)
   {
      
       ele.checked = false;
       fs.writeFileSync('./todo.json', JSON.stringify(todoList));
   }
}); 
}



function deleted(data) {
    if(fs.existsSync('./todo.json')){
    const todostring=fs.readFileSync('./todo.json','utf-8');
    const todolist=JSON.parse(todostring);
     if(todolist.length==0)
     {
       console.log("empty");
     }
     else{
        let flage=false;
       const x=todolist.filter((elm,index,arr)=>{
            if(elm.id==data.id){
                flage=true;
                arr.splice(index,1);
                return true;
            }
            return false;
       })
       if(flage==false) console.log("id not found");
       else console.log("removed");
     }
    fs.writeFileSync('./todo.json',JSON.stringify(todolist));
    }
    else{
        console.log("file not found");
    }

    // todoList.map(ele => {
    //     if(ele.id == data.id)
    //     {
    //        console.log(ele);
    //         ele = "";
    //         //ele.remove(); 
    //         fs.writeFileSync('./todo.json', JSON.stringify(todoList));
    //         return ele; 
    //     }
    // }); 
    // fs.writeFileSync('./todo.json', JSON.stringify(todoList));
    // console.log();
}


function list(action) {
    switch (action) {

        case "All":
            console.log( todoList);
            break;
        case "check":
            todoList.filter(ele => { 
             if( ele.checked == true)
             {
                const checkData = ele;
                console.log(checkData);
             }   
          });
            break;
        case "UnCheck":
            todoList.filter(ele => { 
                if( ele.checked == false)
                {
                   const checkData = ele;
                   console.log(checkData);
                } 
             });
            break;
        default:
            console.log("your Argments is correct ");
            break;
    } 
}




module.exports = {
    added,
    edit,
    deleted,
    check,
    UnCheck,
    list
   
}