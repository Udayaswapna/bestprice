<?php
mysqli_connect("localhost", "root", "");
mysqli_select_db("product");

$query="select * from order_details";
$result=mysqli_query($query);
?>


<html>
    <head>
        <title>Order details</title>
    </head>
<body>
    <table align="center" style="width:600px" border="1px line-height:40px;">
        <tr>
            <th clospan="4" ><h2>details</h2></th>
        </tr>
        
       <t> 
           <th>id</th>
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
        </t>
            
<?php

       while($rows=mysqli_fetch_assoc($result))
         {
 ?>
   
        <tr>
    <td><?php  echo $rows['id']; ?></td>
   <td><?php  echo $rows['fname']; ?></td>
   <td><?php  echo $rows['lname']; ?></td>
   <td><?php  echo $rows['company']; ?></td>
   <td><?php  echo $rows['addr1']; ?></td>
   <td><?php  echo $rows['addr2']; ?></td>
   <td><?php  echo $rows['city']; ?></td>
    <td><?php  echo $rows['state']; ?></td>
    <td><?php  echo $rows['country']; ?></td>
    <td><?php  echo $rows['zip']; ?></td>
   <td><?php  echo $rows['cno']; ?></td>
  <td><?php  echo $rows['email']; ?></td>
   <td><?php  echo $rows['product']; ?></td>
 <td><?php echo $rows['amount']; ?></td>
    
        </tr>

<?php
         }
?>
   </table>

</body>
</html>

