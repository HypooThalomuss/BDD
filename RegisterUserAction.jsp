<%-- 
    Document   : RegisterUserAction
    Created on : March 20, 2022, 11:57:08 AM
    Author     : Jacob DeCarolis
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
            String id = request.getParameter("Student ID");
            String first = request.getParameter("firstName");
            String last = request.getParameter("lastName");
            String user = request.getParameter("username");
            String password = request.getParameter("password");
            String question = request.getParameter(securityQuestion");
            String answer = request.getParameter("securityAnswer");
            String type = request.getParameter("usertype");
            
            String sql = "insert into student values (0, '" + first + "', '" + last + "',"
                    + "'" + user + "', '" + password + "', '" + question + "', '" + answer + "', '" + type + "')";
            out.print("<h2>" + sql + "</h2>");
            
            DBConnect dbConnect = new DBConnect();
            out.print(dbConnect.updateDB(sql));
%>
        
    </body>
</html>
