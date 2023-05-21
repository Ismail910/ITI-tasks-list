
import { Formik } from 'formik';
import React from 'react';
import { Text, Button, View, TextInput } from 'react-native';
import * as Yup from "yup";
export default function form() {

  return (
      <View>
        {/* <Text>  Login Form   </Text>  */}
        <Formik  
        initialValues={{username : "", password: "",email: "ismail@gmail.com"}}

        validationSchema={
            Yup.object({
                username: Yup.string()
                .required("Username is Required").min(2, "Username must more than 2 char"),
                password: Yup.string().required("Password is Required").min(8, "Password must more than 8 char"),
                email: Yup.string()
                .required("Email is Required").email('Invalid email'),
                PhoneNumber: Yup.number().required("PhoneNumber is Required")
            })
        } > 
        
        {props => (
            <View> 
                <TextInput style={{fontSize: 15,margin:10}} placeholder='Username' onChangeText={props.handleChange("username")} />
                {
                    props.touched.username && props.errors.username ?  
                    <Text style={{color:'red'}}>  {props.errors.username} </Text> : null
                }

                <TextInput placeholder='Password' style={{fontSize: 15,margin:10}}  onChangeText={props.handleChange("password")}  secureTextEntry={true} />
                {
                    props.touched.password && props.errors.password ?  
                    <Text style={{color:'red'}}>  {props.errors.password} </Text> : null
                }

                <TextInput placeholder='Email' style={{fontSize: 15,margin:10}}  onChangeText={props.handleChange("email")} />
                {
                    props.touched.email && props.errors.email ?  
                    <Text style={{color:'red'}}>  {props.errors.email} </Text> : null
                }

                <TextInput placeholder='PhoneNumber' style={{fontSize: 15,margin:10}}  onChangeText={props.handleChange("PhoneNumber")}  />

                {
                    props.touched.PhoneNumber && props.errors.PhoneNumber ?  
                    <Text style={{color:'red'}}>  {props.errors.PhoneNumber} </Text> : null
                }

                <Button title='Login' color='green' onPress={props.handleSubmit} />

            </View>

        )}
        
        </Formik>
      
      </View>
        
  );
}

