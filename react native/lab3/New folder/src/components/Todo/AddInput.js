
import React, { useState } from 'react';
import { Text, Button, View, TextInput } from 'react-native';

export default function Add({submitHandle}) {

    const [value, setValue] = useState("")

    const onChangeValue = (text) => {
        setValue(text)
    }

  return (
      <View>
        <TextInput placeholder='Add Todo' onChangeText={onChangeValue} /> 

        <Button title='Add Todo' color='maroon' onPress={() => submitHandle(value)} /> 
      
      </View>
        
  );
}

