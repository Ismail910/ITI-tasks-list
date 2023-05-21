
import React from 'react';
import { Text, Button } from 'react-native';

export default function Page({navigation}) {

  return (
      <>
      
        <Button style={{padding:10}}  title='Login' onPress={() => 
         navigation.navigate("form")} /> 

        <Button  style={{padding:10}}  title='Todo' onPress={() => 
        navigation.navigate("Todo")} /> 

      </>
        
  );
}

