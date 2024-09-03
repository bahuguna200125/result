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
 $sql ="SELECT * FROM  user_result";
 $result=$conn->query($sql);
 ?>
  <table>
   
   <tr>
     <th>ID</th>
     <th>USER ID</th>
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
      echo "<td>".$row["id"]."</td>";
echo "<td>".$row["id"]."</td>";
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
  <?php
  $sql ="SELECT `user_id`,`hindi`,`english`,`maths`,`physics`,`chemistry`, (`hindi`+`english`+`maths`+`physics`+`chemistry`) AS total_marks FROM  user_result";
  $result=$conn->query($sql);
  ?>
   <table>
    
    <tr>
      <th>USER ID</th>
      <th>HINDI</th>
      <th>ENGLISH </th>
      <th>MATHS</th>
      <th>PHYSICS</th>
      <th>CHEMISTRY</th>
      <th>TOTAL MARKS</th>
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
  echo "<td>".$row["hindi"] ."</td>";
   echo    "<td>". $row["english"] ."</td>";
   echo    "<td>". $row["maths"] ."</td>";
   echo    "<td>". $row["physics"] ."</td>";
   echo    "<td>". $row["chemistry"] ."</td>";
   echo    "<td>". $row["total_marks"] ."</td>";
     ?>
      </tr>
     <?php
     }
 
   } else {
     echo "0 results";
   }


  $conn->close();
  ?>
   </table>
   </body>
   </html>
