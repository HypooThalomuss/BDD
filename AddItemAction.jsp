<%-- 
    Document   : AddItemAction
    Created on : March 21, 2022, 11:15 AM
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
            String id = request.getParameter("Item ID");
            String name = request.getParameter("itemName");
            String location = request.getParameter("itemLocation");
            String amount = request.getParameter("itemAmount");
            String price = request.getParameter("itemPrice");
            
            String sql = "insert into users values (0, '" + name + "', '" + location + "',"
                    + "'" + amount + "', '" + price + "')";
            out.print("<h2>" + sql + "</h2>");
            
            DBConnect dbConnect = new DBConnect();
            out.print(dbConnect.updateDB(sql));
%>
        
    </body>
</html>
