const express = require('express');
const reuter = express.Router()
const userModel = require('../models/users')

reuter.get('/',async (req ,res)=>{

    try {
      const users =   await userModel.find({});
      return res.json(users);
    } catch (err) {
        res.status(500).send(err)
    }
  
    // await userModel.find({},(err, users)=>{
    //     if(!err) return res.json(users);
    //     res.status(500).send(err)
    // })
})


reuter.get('/:id',(req ,res)=>{
   try {
        userModel.find({_id: req.params.id}, (err, user)=>{
            if(!err) return res.json(user); 
        })
   } catch (err) {
    res.status(500).send(err)
   }
    
})



reuter.post('/', async (req ,res)=>{
    try {
        if(req.body.email == undefined)
        res.send(`Email is require`);

        const user ={
        ...req.body 
        }
        userModel.create(user ,(err , createduser)=>{
            if(!err) return res.json(createduser);
        
        });
    } catch (err) {
        res.status(500).send(err);
    }
    

   
})

reuter.put('/:id',async (req ,res)=>{
    try {
        userModel.updateOne({_id: req.params.id},{ 
            firstName: req.body.firstName,
            lastName: req.body.lastName,
            email: req.body.email,
            age: req.body.age},(err, user)=>{
            if(!err) return res.json(user);
           
        })
    } catch (error) {
        res.status(500).send(error)
    }
   
})

reuter.delete('/:id',async (req ,res)=>{
try {
    userModel.deleteOne({_id: req.params.id},(err, user)=>{
        if(!err) return res.json(user);
        
    })
} catch (error) {
    res.status(500).send(error)
}
    
})



module.exports = reuter ; 