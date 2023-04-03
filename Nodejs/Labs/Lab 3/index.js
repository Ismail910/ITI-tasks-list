const express = require('express');
const mongoose = require('mongoose');
const PORT = process.env.PORT || 5000 ;
const app = express();
app.use(express.json());


const userRouter = require('./router/user')
const postRouter = require('./router/post')


app.use(['/user' , '/users'], userRouter);
app.use(['/post','/posts'], postRouter);




mongoose.connect("mongodb://127.0.0.1:27017/blogging", (err)=>{
    if(!err) return console.log("DB Connect Success");
    console.log(err);
})


app.listen(PORT , (err)=>{
    if(!err)return console.log(`Server starts at Port ${PORT}`);
})