
import React from 'react';
import { NavigationContainer } from '@react-navigation/native';


import { createNativeStackNavigator } from '@react-navigation/native-stack';
import Page from './src/pages/page';
import form from './src/components/formvalidation/form';
import Todo from './src/components/Todo/Todo';

const Stack = createNativeStackNavigator();



export default function App() {

  return (

    <NavigationContainer>
        <Stack.Navigator>

        <Stack.Screen name="HomePage" component={Page}  />

        <Stack.Screen name="form" component={form} style={{padding:10}}  />

        <Stack.Screen name="Todo" component={Todo}  style={{padding:10}} />




        </Stack.Navigator>
    </NavigationContainer>

  );
}

