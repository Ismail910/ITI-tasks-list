import React from "react";
import { StyleSheet, View, ScrollView, Button, Linking } from "react-native";
import * as FileSystem from "expo-file-system";
import { Asset } from "expo-asset";
import PhotoCard from "./src/components/PhotoCard";
import LinksCard from "./src/components/Links";
import Information from "./src/components/Information";
import { Card } from "@rneui/themed";
import Languages from "./src/components/Languages";

export default function App() {
  const handleDownloadCV = async () => {
    const fileUri = FileSystem.cacheDirectory + "cv.pdf";
    const downloadUrl = Asset.fromModule(require("./assets/cv.pdf")).uri;

    try {
      await FileSystem.downloadAsync(downloadUrl, fileUri);
      await FileSystem.getContentUriAsync(fileUri).then((uri) => {
        Linking.openURL(uri);
      });
    } catch (error) {
      console.log("Error downloading CV:", error);
    }
  };

  return (
    <ScrollView>
      <View style={styles.container}>
        <PhotoCard name="Ismail magdy" description="Full Stack Developer" />
        <LinksCard />
        <Card.Divider style={{ marginTop: 10 }} />
        <Information />
        <Card.Divider style={{ marginTop: 10 }} />
        <Languages />
        <Card.Divider style={{ marginTop: 10 }} />
        <Button title="Download CV" onPress={handleDownloadCV} />
      </View>
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "white",
    justifyContent: "center",
  },
});
