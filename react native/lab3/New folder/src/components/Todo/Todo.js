
import React, { useState ,useEffect} from 'react';
import { Text, Button, FlatList } from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';
import Add from './AddInput';
import List from './ListTodo';

export default function Todo() {

    const [data, setData] = useState([]);
    const [errordata, seterrordata] = useState("")
  useEffect(() => {
    AsyncStorage.getItem('todo')
      .then((storedData) => {
        if (storedData) {
          const parsedData =JSON.parse(storedData);
          setData(parsedData);
        }
      })
      .catch((error) => {
        // Handle AsyncStorage error
        alert(error);
      });
  }, []);

    
    const SubmitHandle = (value) => {
        if(value==""){
            seterrordata("cant be empty");
        }
        else{
          seterrordata("");
        setData((prevTodo) => {
       let  newtodo=[{
                value: value
            }, 
            ...prevTodo
        ]
         AsyncStorage.setItem("todo", JSON.stringify(newtodo))
  .then(() => {
    setData(newtodo);
  })
  .catch((error) => {
    // Handle AsyncStorage error
    alert(error);
  });
            return newtodo;
        })
        }
    }
  const handleDelete = (item) => {
    const updatedTodo = data.filter((todo) => todo !== item);
    AsyncStorage.setItem('todo', JSON.stringify(updatedTodo))
      .then(() => {
        setData(updatedTodo);
      })
      .catch((error) => {
        // Handle AsyncStorage error
        console.log(error);
      });
  };

    const handleEdit = (item, editvalue) => {
    const updatedData = data.map((todo) => {
      if (todo.value === item) {
        return { value: editvalue };
      }
      return todo;
    });
  AsyncStorage.setItem('todo', JSON.stringify(updatedData))
      .then(() => {
        setData(updatedData);
      })
      .catch((error) => {
        // Handle AsyncStorage error
        console.log(error);
      });
  };
  return (
      <>
        <Text>  Todo   </Text>

        <Add submitHandle= {SubmitHandle}  />
        {/* <List item={data} /> */}
        {
          errordata ?  
                    <Text style={{color:'red'}}>  {errordata} </Text> : null
        }
        <FlatList
        data={data}
        renderItem={({ item }) => (
          <List item={item} onDelete={handleDelete} onEdit={handleEdit} />
        )}
        keyExtractor={(item) => item.value}
      />
      </>
        
  );
}

