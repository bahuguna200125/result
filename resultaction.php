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

// echo $_POST['hin'];

// var_dump(isset($_POST['hin']));

if($_POST['hin']==""){
    echo "please  fill marks of hindi";
    exit;
}
if($_POST['eng']==""){
    echo "please fill marks of english";  
    exit;
}
if($_POST['math']==""){
    echo "please fill marks of maths";
    exit;
}
if($_POST['phy']==""){
    echo "please fill marks of physics";
    exit;
}
if($_POST['che']==""){
    echo "please fill marks of chemistry";
    exit;
}
?>
    <div id="result" >
<table>
        <tr>
            <th>SUBJECT</th>
            <th>TOTAL MARKS</th>
            <th> MARKS OBTAINED</th>
        </tr>

        <tr>
<td>Hindi</td>
<td>100</td>
<td><b><?php
echo $_POST['hin'];
?></b><br></td>
</tr>
<tr>
    <td>English</td>
    <td>100</td>
    <td><b><?php
echo $_POST['eng'];
?><br></td>
</tr> 

<tr>
    <td>Maths</td>
    <td>100</td>
    <td><b><?php
echo $_POST['math'];
?></b><br></td>
</tr>
<tr>
    <td>Physics</td>
    <td>100</td>
    <td><b><?php
echo $_POST['phy'];
?></b><br></td>
</tr>
<tr>
    <td>Chemistry</td>
    <td>100</td>
    <td> <b><?php
echo $_POST['che'];
?><br></td>
</tr><br><br>
<tr>
<td>TOTAL MARKS</td>
<td>500</td>
<td> <b><?php
 echo totalmarks($_POST);
$total=totalmarks($_POST);



 function totalmarks($arrayofsub){
   return $arrayofsub['hin']+  $arrayofsub['eng'] +  $arrayofsub['math'] +  $arrayofsub['phy']+ $arrayofsub['che'];
 }
 ?></b></td> 
</tr>
<tr>

    <td id="per" colspan="2">PERCENTAGE</td>

    
    <td><b>
<?php
 percentage($total);
function percentage($totalmarks){

    echo ($totalmarks/500)*100 ;

    
}?>%</b>
</td>
</tr>

    </table>
    </div>

</body>
</html>



 <!-- <?php
//   $total=$_POST['hin']+ $_POST['eng'] + $_POST['math'] + $_POST['phy']+ $_POST['che'];
//  echo $total;
 ?> <br> -->
