import React from "react";

import { Text, Card, Button } from "@rneui/themed";
import { StyleSheet, View, ScrollView } from "react-native";
// import { Button } from "react-native";

// import { StyleSheet, Text, View, ScrollView } from "react-native";

export default function Information() {
  return (
    <View>
      <View style={styles.container}>
        <Button>Age:</Button>
        <Text>24</Text>
      </View>
      <View style={styles.container}>
        <Button>Resedince:</Button>
        <Text>Cairo</Text>
      </View>
      <View style={styles.container}>
        <Button>Freelancer:</Button>
        <Text style={{ color: "green" }}>Available</Text>
      </View>
      <View style={styles.container}>
        <Button>Address:</Button>
        <Text>Assiut,Egypt</Text>
      </View>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "white",
    flexDirection: "row",
    alignItems: "center",
    justifyContent: "space-between",
    marginTop: 20,
    marginRight: 40,
    marginLeft: 40,
  },
});
