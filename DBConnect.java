/*

package myBeans;

import java.sql.*;


 //* @author Jacob DeCarolis
 
public class DBConnect {

    //Connection string
    String driver = "com.mysql.jdbc.Driver";
    String url = "jdbc:mysql://localhost:3306/classroom";
    String user = "mahadev";
    String pwd = "mahadev";

    //Classes from sql package
    Connection conn;
    Statement stm;
    ResultSet rst;
    ResultSetMetaData rsmd;

    //method to connect to database
    private String openDB() {
        try {
            Class.forName(driver); //loads driver into memory
            conn = DriverManager.getConnection(url, user, pwd);
            stm = conn.createStatement();
            return "Connected";
        } catch (Exception e) {
            return e.getMessage();
        }
    }

    //method to close database
    private void closeDB() {
        try {
            stm.close();
            conn.close();
        } catch (Exception e) {

        }
    }

    //method to execute update
    public String updateDB(String sql) {
        String message = openDB();
        if (message.equals("Connected")) {
            try {
                stm.executeUpdate(sql);
                closeDB();
                return "Update Successful!";
            } catch (Exception e) {
                return e.getMessage();
            }
        } else {
            return message;
        }
    }

    //Method for displaying query results as an HTML table
    public String createHTMLTable(String sql) {
        String html = "";
        String message = openDB();
        if (message.equals("Connected")) {
            try {
                rst = stm.executeQuery(sql);
                rsmd = rst.getMetaData();
                int count = rsmd.getColumnCount();
                html += "<thead><tr>";
                for (int i = 1; i <= count; i++) {
                    html += "<td>" + rsmd.getColumnName(i) + "</td>";
                }
                html += "</tr></thead>";

                html += "<tbody>";
                while (rst.next()) {
                    html += "<tr>";
                    for (int i = 1; i <= count; i++) {
                        html += "<td>" + rst.getString(i) + "</td>";
                    }
                    html += "</tr>";
                }
                html += "</tbody>";

                closeDB();
                return html;
            } catch (Exception e) {
                return e.toString();
            }
        } else {
            return message;
        }
    }
}

*/
