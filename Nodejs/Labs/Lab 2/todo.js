const express = require('express');
const PORT = process.env.PORT || 5000 ;
const app = express();
app.use(express.json())


const helpers = require('./helpers.js');
const fs = require("fs");


const readfile = fs.readFileSync('./todo.json','utf-8');
const todoList = JSON.parse(readfile);
const  FILE_PATH = process.env.FILE_PATH || './todo.json';


function prepareData(Data)
{
    const prepData = Data.reduce(( prev,ele) => {
        const [Kay, value] = ele.split("=")
        prev[Kay] = value; 
        return prev;
    }, {} )
    return prepData;
}

function main(Argm){
    const [,,opration , ...data] = Argm;
    //console.log(data);
    const finalData = prepareData(data);
    switch (opration) {
        case "added":
            helpers.added(finalData);
            break;
        case "edit":
            helpers.edit(finalData);
            break;
        case "deleted":
            helpers.deleted(finalData);
            break;
        case "check":
            helpers.check(finalData);
            break;
        case "UnCheck":
            helpers.UnCheck(finalData);
            break;
        case "list":
            const [,,, action,...any ] = Argm;
            list(action)
            break;
        default:
            console.log("your Argments is correct ");
            break;
    } 
   
    
}

//  main(process.argv);

//console.log(process.argv);






app.post('/todo', (req , res)=>{
    console.log(req);
    //const todoList = JSON.parse(fs.readFileSync(FILE_PATH, 'utf-8'))
    const todoData = { 
        title: req.body.title,
        body: req.body.body,
    }
//     todoList.push(todoData)
//     fs.writeFileSync(FILE_PATH, JSON.stringify(todoList , null,2))
    helpers.added(todoData);

    res.json(todoData);

})


app.put('/todo/:id', (req , res)=>{
    const todoData = {
        id: req.params.id,
        ...req.body
    }
   helpers.edit(todoData)

   res.json(todoData);
    
})

app.put('/todo/:id' , (req , res)=>{
    const todoData = {
        id: req.params.id,
    }
   helpers.check(todoData)
   res.json(todoData);
})

app.put('/todo/:id' , (req , res)=>{
    const todoData = {
        id: req.params.id,
    }
   helpers.UnCheck(todoData)
   res.json(todoData);
})

app.delete('/todo/:id' , (req , res)=>{
    const todoData = {
        id: req.params.id,
    }
   helpers.deleted(todoData)
   res.json(todoData);
})

app.get('/todo/:kay' , (req , res)=>{
    
   helpers.list(req.params.kay);
   
   res.json(req.params.kay);
})

app.listen(PORT, (err) =>{
    if (!err) return console.log(`Server starts at Port ${PORT}`);
})