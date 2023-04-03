const express = require('express');
const reuter = express.Router()
const postModel = require('../models/posts');
const { populate } = require('../models/users');


reuter.get('/',(req ,res)=>{
    postModel.find({},(err, posts)=>{
        if(!err) return res.json(posts);
        res.status(500).send(err)
    }).populate('auther');
})


    
   


reuter.get('/:id',(req ,res)=>{
    postModel.find({_id:req.params.id},(err,post)=>{
        if(!err) return res.json(post);
        res.status(500).send(err);
    }).populate('auther');
   
})


reuter.post('/',(req ,res)=>{
   postModel.create(req.body,(err, createdPost)=>{
    if(!err) return res.json(createdPost)
    res.status(500).send(err)
   })
})


reuter.put('/:id',(req ,res)=>{
    postModel.updateOne({_id: req.params.id},{
        title: req.body.title,
        body: req.body.body,
    },(err,post)=>{
        if(!err) return res.json(post);
        res.status(500).send(err)
    })
})


reuter.delete('/:id',(req ,res)=>{
   postModel.deleteOne({_id: req.params.id}, (err , post)=>{
    if(!err) return res.json(post);
    res.status(500).send(err);
   })
})



module.exports = reuter ; 