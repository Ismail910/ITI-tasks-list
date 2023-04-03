const helpers = require('./helpers.js');
const fs = require("fs")
const readfile = fs.readFileSync('./todo.json','utf-8');
const todoList = JSON.parse(readfile)
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
            helpers.list(action)
                
           
            break;
    
        default:
            console.log("your Argments is correct ");
            break;
    } 
}
main(process.argv);

// console.log(process.argv);
