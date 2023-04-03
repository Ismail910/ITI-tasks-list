
package wordandchar;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.net.*;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

class WordCountApp extends JFrame implements ActionListener {
    private JTextArea inputTextArea ;
    private JButton wordCountButton, charCountButton;

    public WordCountApp() {

        // Initialize components
        inputTextArea = new JTextArea(20,20);
        wordCountButton = new JButton("Count Words");
        charCountButton = new JButton("Count Characters");

        // Add components to the frame
        setLayout(new FlowLayout());
        add(inputTextArea);
        add(wordCountButton);
        add(charCountButton);
        // Register event listeners
        wordCountButton.addActionListener(this);
        charCountButton.addActionListener(this);
    }

    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == wordCountButton) {
            String text = inputTextArea.getText();
            int wordCount = text.split("\\s+").length;
             JOptionPane.showMessageDialog(this, "Number Of Words " + wordCount);
        } else if (e.getSource() == charCountButton) {
            String text = inputTextArea.getText();
            int charCount = text.length();
            JOptionPane.showMessageDialog(this, "Number Of Characters " + charCount);
        }
    }


}


public class WordAndChar {

    public static void main(String[] args) {
        WordCountApp app = new WordCountApp();
        app.setTitle("Word and Character Count Application");
        app.setSize(500, 400);
        app.setLocationRelativeTo(null);
        app.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        app.setVisible(true);
    }
    
}
