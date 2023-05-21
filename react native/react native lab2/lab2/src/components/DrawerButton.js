import React from "react";
import { TouchableOpacity ,StyleSheet } from "react-native";
import { Ionicons } from "@expo/vector-icons"


export default  function  DrawerButton ({navigation}) {
    return (

        <TouchableOpacity
        style={styles.wrapper}
        onPress={()=>navigation.navigate('DrawerOpen')}
        >
          <Ionicons size={20} color="maroon" style={styles.icon}
         name='logo-facebook' 
        />
 
        </TouchableOpacity>
);
}

const styles = StyleSheet.create({
    wrapper:{
        marginLeft:10
    },
    icon:{
        width:20,
        height:15
    }
});
