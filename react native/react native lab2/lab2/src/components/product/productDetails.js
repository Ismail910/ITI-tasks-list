
import { Card } from '@rneui/themed';
import axios from 'axios';
import React, { useEffect, useState } from 'react';
import { Text, Button } from 'react-native';
import { View } from 'react-native-web';

export default function productDetails({navigation, route}) {

    // alert(JSON.stringify(route.params.id))
    const id = route.params.id

    const [product, setproduct] = useState({})

    useEffect(() => {
        axios.get(`https://dummyjson.com/products/${id}`)
        .then((res) => setproduct(res.data))
        .catch((err) => alert(err))

    }, [])

      console.log(product)
  return (
      <View>
        <Text style={{ color: "maroon" , fontWeight:"700" }}>  Details   </Text>
            <Card>
                    <Card.Title>{product.title}</Card.Title>
                    <Card.Divider />
                    <Card.Image
                    style={{ padding: 0 }}
                    source={{
                        uri: product.thumbnail
                        
                    }}
                    />
                    <Text style={{ marginBottom: 10 }}> {product.description}
                    </Text>
                </Card>
      
      </View>
        
  );
}

