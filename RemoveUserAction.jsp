<%-- 
    Document   : RemoveUserAction
    Created on : March 23, 2022, 10:13 AM
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
            String userId = request.getParameter("userId");
            
            String sql = "delete from users where UserID='" + userId + "'";
            out.print("<h2>" + sql + "</h2>");
            
            DBConnect dbConnect = new DBConnect();
            out.print(dbConnect.updateDB(sql));
%>
        
    </body>
</html>
