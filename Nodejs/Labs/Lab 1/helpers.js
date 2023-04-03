const fs = require("fs");


  function asyncReadFile(filePath, encoding){
    return new Promise((resolve, rejects)=>{
        fs.readFile(filePath , encoding, (err, data)=>{
            if(!err) return resolve(data);
            return rejects(err)
        })
        
    })
}


 function asyncWriteFile(filePath, data){
    return new Promise((resolve, rejects)=>{
        fs.writeFile(filePath , data, (err)=>{
            if (!err) return resolve();
            return rejects(err);
        })
    })

}

function asyncExists(filePath) {
    return new Promise((resolve, reject)=>{
        fs.exists(filePath, (exist)=>{
            if(!exist) return reject(exist);
            return resolve(exist)
        })
    })
    
}

async function added(data) {
    const readfile = await asyncReadFile('./todo.json','utf-8');
    const todoList = JSON.parse(readfile)

    console.log(data); 
    const length=(todoList[todoList.length-1].id)+1;
    console.log(length);
    const userOfData = {
        id:length,
        body:data.body,
        title:data.title,
        checked: false
    }
    const exits = await asyncExists('./helpers.js');
   if (exits) {
        todoList.push(userOfData);
       await asyncWriteFile('./todo.json', JSON.stringify(todoList));
    }else{
       await asyncWriteFile('tpdo.json',JSON.stringify([]));
    }
 
}


async function edit(data) {
    const readfile = await asyncReadFile('./todo.json','utf-8');
    const todoList = JSON.parse(readfile)
          todoList.map(async (ele) => {
         if(ele.id == data.id)
        {
           // console.log(ele);
            ele.title = data.title;
            ele.body =data.body;
            ele.checked = false;
            await asyncWriteFile('./todo.json', JSON.stringify(todoList));
        }
       // console.log(ele);
    }); 
}

async function check(data) {
    const readfile = await asyncReadFile('./todo.json','utf-8');
    const todoList = JSON.parse(readfile)
         todoList.map(async ele => {
        if(ele.id == data.id)
        {
            ele.checked = data.check;
           await asyncWriteFile('./todo.json', JSON.stringify(todoList));
        }
    }); 
}




async function UnCheck(data) {
    const readfile = await asyncReadFile('./todo.json','utf-8');
    const todoList = JSON.parse(readfile)
    todoList.map(async ele => {
   if(ele.id == data.id)
   {
       ele.checked = false;
       await asyncWriteFile('./todo.json', JSON.stringify(todoList));
   }
}); 
}



async function deleted(data) {
    
    if( await asyncExists('./todo.json')){
        const readfile = await asyncReadFile('./todo.json','utf-8');
        const todolist = JSON.parse(readfile)
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
     await asyncWriteFile('./todo.json',JSON.stringify(todolist));
    }
    else{
        console.log("file not found");
    }

}


async function list(action) {
    const readfile = await asyncReadFile('./todo.json','utf-8');
    const todoList = JSON.parse(readfile)
        
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