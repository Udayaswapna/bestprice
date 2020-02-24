<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('product');
$sql="SELECT * FROM order_details";
$records=mysql_query($sql);
?>


<html>
    <head>
        <title>Order details</title>
    </head>
<body>
    <table width="600" border="1" cellpadding="1" cellspacing="1">
       <tr> 
            <th>fname</th>
            <th>lname</th>
            <th>company</th>
            <th>addr1</th>
            <th>addr2</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>zip</th>
            <th>cno</th>
            <th>email</th>
            <th>product</th>
            <th>amount</th>
        </tr>
            
<?php

while($order_details=mysql_fetch_assoc($records)){
    echo "<tr>";
    
    echo "<td>".$order_details['fname']."</td>";
    echo "<td>".$order_details['lname']."</td>";
    echo "<td>".$order_details['company']."</td>";
    echo "<td>".$order_details['addr1']."</td>";
    echo "<td>".$order_details['addr2']."</td>";
    echo "<td>".$order_details['city']."</td>";
    echo "<td>".$order_details['state']."</td>";
    echo "<td>".$order_details['country']."</td>";
    echo "<td>".$order_details['zip']."</td>";
    echo "<td>".$order_details['cno']."</td>";
    echo "<td>".$order_details['email']."</td>";
    echo "<td>".$order_details['product']."</td>";
    echo "<td>".$order_details['amount']."</td>";
    
        echo "</tr>";

}
?>
   </table>

</body>
</html>

