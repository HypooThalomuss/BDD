<%-- 
    Document   : LoginAction
    Created on : March 26, 2022, 7:53 PM
    Author     : Thomas Pierce Butler V
--%>

<%@page contentType="text/html" pageEncoding="UTF-8" import="myBeans.DBConnect"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            String user = request.getParameter("uname");
            String passw = request.getParameter("pass");
            
            String sql = "SELECT Username FROM users WHERE Username = '" + user + "' AND Password = '" + passw + "'";
            out.print("<h2>" + sql + "</h2>");
            
            DBConnect dbConnect = new DBConnect();
            out.print(dbConnect.updateDB(sql));
%>
        
    </body>
</html>