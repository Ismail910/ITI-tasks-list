
import React,{useState} from 'react';
import { Text, Button ,TextInput, View} from 'react-native';

export default function List({item,onDelete, onEdit }) {
    const [dataupdate, setdataupdate] = useState([]);
     const onChangeValue = (text) => {
        setdataupdate(text)
    }

  return (
      <View style={{flex:1,flexDirection:'row', justifyContent: 'space-between',padding:3}}>
        <Text style={{color: 'green', fontSize: 20}}> {item.value} </Text>
        
      <Button title='delete' color='maroon' onPress={() => onDelete(item)} />
        <TextInput placeholder='update value' onChangeText={onChangeValue} /> 
      
      <Button title='update' color='maroon' onPress={() => onEdit(item.value,dataupdate)} />
      </View>
        
  );
}

