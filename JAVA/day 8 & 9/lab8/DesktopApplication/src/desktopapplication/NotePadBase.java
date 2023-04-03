package desktopapplication;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.Scanner;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.scene.control.Alert;
import javafx.scene.control.Menu;
import javafx.scene.control.MenuBar;
import javafx.scene.control.MenuItem;
import javafx.scene.control.TextArea;
import javafx.scene.input.Clipboard;
import javafx.scene.input.ClipboardContent;
import javafx.scene.input.KeyCodeCombination;
import javafx.scene.layout.BorderPane;
import javafx.scene.input.KeyCode;
import javafx.scene.input.KeyCombination;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.stage.Window;

public  class NotePadBase extends BorderPane {

    protected final MenuBar menuBar;
    protected final Menu Filemenu;
    protected final MenuItem newItem;
    protected final MenuItem openItem;
    protected final MenuItem saveItem;
    protected final MenuItem exitItem;
    protected final Menu editmenu;
    protected final MenuItem undoItem;
    protected final MenuItem copyItem;
    protected final MenuItem cutItem;
    protected final MenuItem pastItem;
    protected final MenuItem deleteItem;
    protected final MenuItem selectAllItem;
    protected final Menu helpmenu;
    protected final MenuItem aboutItem;
    protected final TextArea textArea;

    public NotePadBase(Stage mainstage) {

        menuBar = new MenuBar();
        Filemenu = new Menu();
        newItem = new MenuItem();
        openItem = new MenuItem();
        saveItem = new MenuItem();
        exitItem = new MenuItem();
        editmenu = new Menu();
        undoItem = new MenuItem();
        copyItem = new MenuItem();
        cutItem = new MenuItem();
        pastItem = new MenuItem();
        deleteItem = new MenuItem();
        selectAllItem = new MenuItem();
        helpmenu = new Menu();
        aboutItem = new MenuItem();
        textArea = new TextArea();

        setMaxHeight(USE_PREF_SIZE);
        setMaxWidth(USE_PREF_SIZE);
        setMinHeight(USE_PREF_SIZE);
        setMinWidth(USE_PREF_SIZE);
        setPrefHeight(400.0);
        setPrefWidth(600.0);

        BorderPane.setAlignment(menuBar, javafx.geometry.Pos.CENTER);

        Filemenu.setMnemonicParsing(false);
        Filemenu.setText("File");

        newItem.setMnemonicParsing(false);
        newItem.setText("New");
        newItem.setAccelerator(new KeyCodeCombination(KeyCode.N, KeyCombination.CONTROL_DOWN));
        newItem.setOnAction(event -> {
            newFile();
        });
                
        openItem.setMnemonicParsing(false);
        openItem.setText("Open");
        openItem.setAccelerator(new KeyCodeCombination(KeyCode.O, KeyCombination.CONTROL_DOWN));
        openItem.setOnAction(event -> {
            openFile(mainstage);
        });
    

        saveItem.setMnemonicParsing(false);
        saveItem.setText("Save");
        saveItem.setAccelerator(new KeyCodeCombination(KeyCode.S, KeyCombination.CONTROL_DOWN));

        saveItem.setOnAction(event -> {
            saveFile();
        });
                
        exitItem.setMnemonicParsing(false);
        exitItem.setText("Exit");
        exitItem.setAccelerator(new KeyCodeCombination(KeyCode.E, KeyCombination.CONTROL_DOWN));

        exitItem.setOnAction(event -> {
            System.exit(0);  
        });
                
        editmenu.setMnemonicParsing(false);
        editmenu.setText("Edit");

        undoItem.setMnemonicParsing(false);
        undoItem.setText("Undo");


        copyItem.setMnemonicParsing(false);
        copyItem.setText("Copy");
        copyItem.setOnAction(e -> {
            // code to copy the selected text to the clipboard
            String selectedText = textArea.getSelectedText();
            Clipboard clipboard = Clipboard.getSystemClipboard();
            ClipboardContent content = new ClipboardContent();
            content.putString(selectedText);
            clipboard.setContent(content);
      });

        cutItem.setMnemonicParsing(false);
        cutItem.setText("Cut");
        
       cutItem.setOnAction(e -> {
    // code to cut the selected text to the clipboard
            String selectedText = textArea.getSelectedText();
            Clipboard clipboard = Clipboard.getSystemClipboard();
            ClipboardContent content = new ClipboardContent();
            content.putString(selectedText);
            clipboard.setContent(content);
            textArea.deleteText(textArea.getSelection());
        });


        pastItem.setMnemonicParsing(false);
        pastItem.setText("Past");
        pastItem.setOnAction(e -> {
        // code to paste the contents of the clipboard into the text area
         Clipboard clipboard = Clipboard.getSystemClipboard();
         if (clipboard.hasString()) {
        textArea.insertText(textArea.getCaretPosition(), clipboard.getString());
        }
        });

        deleteItem.setMnemonicParsing(false);
        deleteItem.setText("Delete");
        deleteItem.setOnAction(e -> {
         // code to delete the selected text from the text area
        textArea.deleteText(textArea.getSelection());
      });


        selectAllItem.setMnemonicParsing(false);
        selectAllItem.setText("Select All");
        selectAllItem.setOnAction(e -> {
          // code to select all text in the text area
           textArea.selectAll();
       });

        helpmenu.setMnemonicParsing(false);
        helpmenu.setText("Help");

        aboutItem.setMnemonicParsing(false);
        aboutItem.setText("About");
                aboutItem.setOnAction(event -> {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("About");
            alert.setHeaderText("JavaFX Notepad");
            alert.setContentText("This is a simple notepad application built using JavaFX.");
            alert.showAndWait();
        });
        setTop(menuBar);

        BorderPane.setAlignment(textArea, javafx.geometry.Pos.CENTER);
        textArea.setPrefHeight(200.0);
        textArea.setPrefWidth(200.0);
        setCenter(textArea);

        Filemenu.getItems().add(newItem);
        Filemenu.getItems().add(openItem);
        Filemenu.getItems().add(saveItem);
        Filemenu.getItems().add(exitItem);
        menuBar.getMenus().add(Filemenu);
        editmenu.getItems().add(undoItem);
        editmenu.getItems().add(copyItem);
        editmenu.getItems().add(cutItem);
        editmenu.getItems().add(pastItem);
        editmenu.getItems().add(deleteItem);
        editmenu.getItems().add(selectAllItem);
        menuBar.getMenus().add(editmenu);
        helpmenu.getItems().add(aboutItem);
        menuBar.getMenus().add(helpmenu);

    }
    private void openFile(Window mainstage) {
    // Create a new file chooser
    FileChooser fileChooser = new FileChooser();


    // Set the file filters
    fileChooser.getExtensionFilters().addAll(
            new FileChooser.ExtensionFilter("Text Files", "*.txt"),
            new FileChooser.ExtensionFilter("All Files", "*.*"));
//            Window stage;

    // Show the open file dialog
    File selectedFile = fileChooser.showOpenDialog(mainstage);

    if (selectedFile != null) {
        try {
            // Read the contents of the selected file into the text area
            Scanner scanner = new Scanner(selectedFile);
            StringBuilder sb = new StringBuilder();

            while (scanner.hasNextLine()) {
                sb.append(scanner.nextLine());
                sb.append(System.lineSeparator());
            }

            textArea.setText(sb.toString());
            scanner.close();
        } catch (IOException e) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Error");
            alert.setHeaderText("Error Reading File");
            alert.setContentText("An error occurred while trying to read the file.");
            alert.showAndWait();
        }
    }
}
private void newFile() {
    // Clear the text area
    textArea.clear();
}

private void saveFile() {
    // Create a new file chooser
    FileChooser fileChooser = new FileChooser();
    // Set the file filters
    fileChooser.getExtensionFilters().addAll(
            new FileChooser.ExtensionFilter("Text Files", "*.txt"),
            new FileChooser.ExtensionFilter("All Files", "*.*"));
            Window mainstage = null;

    // Show the save file dialog
    File selectedFile = fileChooser.showSaveDialog(mainstage);

    if (selectedFile != null) {
        try {
            // Write the contents of the text area to the selected file
            FileWriter fileWriter = new FileWriter(selectedFile);
            fileWriter.write(textArea.getText());
            fileWriter.close();
        } catch (IOException e) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Error");
            alert.setHeaderText("Error Saving File");
            alert.setContentText("An error occurred while trying to save the file.");
            alert.showAndWait();
        }
    }
}


}

