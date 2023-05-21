import React from "react";

import { Text, Card } from "@rneui/themed";
import { StyleSheet, View, ScrollView } from "react-native";

// import { StyleSheet, Text, View, ScrollView } from "react-native";

export default function PhotoCard(props) {
  return (
    <Card>
      <Card.Title
        style={{
          fontSize: 30,
          fontWeight: "bold",
        }}
      >
        {props.name}
      </Card.Title>
      <Card.Image
        style={{
          padding: 0,
          borderRadius: 50,
          marginBottom: 10,
          width: 200,
          height: 200,
          marginLeft: 200,
        }}
        source={{
          uri: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKBH5DbCnCmwQCpcjv__106JSjG3U2oVNZRw&usqp=CAU",
        }}
      />
      <Card.Divider />
      <Card.Title
        style={{ fontSize: 30, fontWeight: "bold", marginBottom: 10 }}
      >
        {props.description}
      </Card.Title>
    </Card>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "white",
    alignItems: "center",
    justifyContent: "center",
  },
});
