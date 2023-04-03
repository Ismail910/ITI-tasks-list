
package findipaddress;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.net.*;

class IPAddressFinder extends JFrame implements ActionListener {
    private JTextField textField;

    public IPAddressFinder() {
        super("IP Address Finder");

        // Create UI components
        JLabel label = new JLabel("Enter URL:");
        textField = new JTextField(20);
        JButton button = new JButton("Find IP Address");

        // Set layout and add components
        setLayout(new FlowLayout());
        add(label);
        add(textField);
        add(button);

        // Register button listener
        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        try {
            // Get URL from text field
            String url = textField.getText().trim();

            // Get IP address for URL
            InetAddress address = InetAddress.getByName(url);

            // Display result using JOptionPane dialog box
            JOptionPane.showMessageDialog(this, "IP Address: " + address.getHostAddress());
        } catch (UnknownHostException ex) {
            // Display error message if URL is invalid
            JOptionPane.showMessageDialog(this, "Invalid URL");
        }
    }


}

public class FindIPAddress {

    public static void main(String[] args) {
     IPAddressFinder gu= new IPAddressFinder();
      // Set window properties
        gu.setSize(400,200);
        gu.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        gu.setLocationRelativeTo(null);
        gu.setResizable(false);
        gu.setVisible(true);
    }
    
}
