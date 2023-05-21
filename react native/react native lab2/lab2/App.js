// import Animated from 'react-native-reanimated';
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
 import { createNativeStackNavigator } from '@react-navigation/native-stack';
import product from './src/components/product/product';
import productDetails from './src/components/product/productDetails'

 const Stack = createNativeStackNavigator();

// import { createDrawerNavigator } from '@react-navigation/drawer';

// const Drawer = createDrawerNavigator();


export default function App() {

  return (

    <NavigationContainer>
        <Stack.Navigator>
        <Stack.Screen name="Products" component={product} />
        <Stack.Screen name="productDetails" component={productDetails} />
        </Stack.Navigator>
    </NavigationContainer>

  );
}

