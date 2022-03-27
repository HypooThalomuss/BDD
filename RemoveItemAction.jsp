/*

<%-- 
    Document   : RemoveItemAction
    Created on : March 22, 2022, 4:38 PM
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
            String id = request.getParameter("itemID");
            
            String sql = "delete from products where ProductID='" + itemId + "'";
            out.print("<h2>" + sql + "</h2>");
            
            DBConnect dbConnect = new DBConnect();
            out.print(dbConnect.updateDB(sql));
%>
        
    </body>
</html>
*/
