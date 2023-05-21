import React from "react";
import { View, Text, StyleSheet, ScrollView } from "react-native";
import { Button, LinearProgress, Tile } from "@rneui/themed";

export default function Languages() {
  return (
    <ScrollView contentContainerStyle={styles.container}>
      <Text style={{ marginTop: 20, marginLeft: 5, fontSize: 20 }}>
        Languages
      </Text>
      <View style={{ margin: 10 }}>
        <Text>Arabic</Text>
        <LinearProgress style={{ marginVertical: 10 }} value={0.7} />
        <Text>Germany</Text>
        <LinearProgress style={{ marginVertical: 10 }} value={0.6} />
        <Text>English</Text>
        <LinearProgress value={1} style={{ marginVertical: 10 }} />
        <Text>Spanish</Text>
        <LinearProgress
          style={{ marginVertical: 10 }}
          value={0.5}
          variant="determinate"
        />
      </View>
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flexGrow: 1,
    backgroundColor: "white",
    justifyContent: "center",
  },
});
