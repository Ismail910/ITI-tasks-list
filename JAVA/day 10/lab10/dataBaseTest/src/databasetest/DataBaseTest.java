
package databasetest;
import java.sql.*;

public class DataBaseTest {
    static final String DB_URL = "jdbc:mysql://localhost:3306/mydatabase";
    static final String USER = "root";
    static final String PASS = "rootroot";
    public static void main(String[] args) {
 
        new DataBaseTest();
    }
    public DataBaseTest(){
    try{
            DriverManager.registerDriver(new com.mysql.cj.jdbc.Driver());

            // Open a connection
            System.out.println("Connecting to database...");
            Connection conn = DriverManager.getConnection(DB_URL, USER, PASS);

            // Execute a query
            System.out.println("Creating statement...");
            Statement stmt = conn.createStatement();
            String sql = "SELECT id, name, email FROM customers";
            ResultSet rs = stmt.executeQuery(sql);

            // Extract data from result set
            while(rs.next()){
                // Retrieve by column name
                int id  = rs.getInt("id");
                String name = rs.getString("name");
                String email = rs.getString("email");

                // Display values
                System.out.print("ID: " + id);
                System.out.print(", Name: " + name);
                System.out.println(", Email: " + email);
            }
            rs.close();
            stmt.close();
            conn.close();
        } catch(SQLException se) {
            se.printStackTrace();
        } catch(Exception e) {
            e.printStackTrace();
        }
    
        System.out.println("Goodbye!");
    }
}


