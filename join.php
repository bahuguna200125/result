<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newresult.css">
</head>
<body>
<?php

$conn = new mysqli("localhost", "amit", "amit","users");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connected";
?>
<?php
 $sql ="SELECT user_details.user_id ,user_details.first_name, user_details.last_name,user_result.hindi,user_result.english,user_result.maths,user_result.physics,user_result.chemistry
 FROM  user_details
 INNER JOIN user_result 
 ON user_details.user_id=user_result.user_id
  ORDER BY user_details.user_id ASC";

 $result=$conn->query($sql);
 ?>
  <table>
   
   <tr>
     <th>USER ID</th>
     <th>FIRST NAME</th>
     <th>LAST NAME</th>
     <th>HINDI</th>
     <th>ENGLISH </th>
     <th>MATHS</th>
     <th>PHYSICS</th>
     <th>CHEMISTRY</th>
     </tr>
 <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        
      ?>
        <tr>
      <?php
      // echo "id: " . $row["user_id"]. " " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    
echo "<td>".$row["user_id"]."</td>";
echo "<td>".$row["first_name"]."</td>";
echo "<td>".$row["last_name"]."</td>";
 echo "<td>".$row["hindi"] ."</td>";
  echo    "<td>". $row["english"] ."</td>";
  echo    "<td>". $row["maths"] ."</td>";
  echo    "<td>". $row["physics"] ."</td>";
  echo    "<td>". $row["chemistry"] ."</td>";
    ?>
     </tr>
    <?php
    }

  } else {
    echo "0 results";
  }?>
  </table>  
</body>
</html>