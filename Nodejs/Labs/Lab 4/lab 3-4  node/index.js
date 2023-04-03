const express = require('express')
const bcrypt = require('bcrypt')
const jwt = require('jsonwebtoken')
const auth = require('./middlewares/auth')
const User = require('./models/user')
const PORT = process.env.PORT || 3000 ;
const TOKEN_KEY =process.env.TOKEN_KEY || "ITI"
const app = express();
app.use(express.json())


// const post = require("./models/post")


  
app.post("/register",async (req, res) => {
    try {
       
        const { firstname, lastname, email, password } = req.body;

        if (!(email && password && firstname && lastname)) {
             res.status(400).send("All input is required");
             //console.log("error")
        }
    
         
        const oldUser = await User.findOne({ email });
        if (oldUser) {
          return res.status(409).send("User Already Exist. Please Login");
        }
          
        encryptedPassword = await bcrypt.hash(password, 10);
    
        const user = await User.create({
            firstname,
            lastname,
            email: email.toLowerCase(), // sanitize: convert email to lowercase
            password: encryptedPassword,
        });
    
        const token = jwt.sign(
          { user_id: user._id, email },
          TOKEN_KEY
        );
        user.token = token;
    
        res.status(201).json(user);  


      } catch (err) {         
        console.log(err);
      }
});



app.post("/login", async (req, res) => {
    try {
        const { email, password } = req.body;
    
        if (!(email && password)) {
          res.status(400).send("All input is required");
        }

        const user = await User.findOne({ email });
        if (user && (await bcrypt.compare(password, user.password))) {
          const token = jwt.sign(
            { user_id: user._id, email },
            TOKEN_KEY
          );
          user.token = token;
          res.status(200).json(user);
        } 
        res.status(400).send("Invalid Credentials"); 
      } 
      catch (err) {       
        console.log(err);
      }
});
                


   app.use("/Welcome",auth , (req,res) => {
      
    res.send(`welcom in new page`)
    
});






// app.use((req,res,next) => {
//     console.log(moment().format('MMMM Do YYYY, h:mm:ss a'))
//     next()
// })
const mongoose = require('mongoose')
mongoose.connect("mongodb://127.0.0.1:27017/loginAndRegister",(err)=>
{
    if(!err) return console.log("databases connect successfuly");
    console.log(err)
})

app.listen(PORT,(err)=>{
    if(!err) return console.log("server connect successfuly");
    console.log(err) 
})


