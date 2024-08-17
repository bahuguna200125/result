<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>
    <div id="heading"><h2>STUDENT MARKSHEET</h2></div><br>
    <div id="info"> STUDENT INFORMARION
<table>
    <tr>
        <th>Name :</th>
        <td><?php
echo $_POST['fname']
?><br></td>
<th>Reg No / Roll No :</th>
<td><?php
echo $_POST['rollno']
?><br></td>
</tr>
<tr>
    <th>Father Name</th>
    <td><?php
echo $_POST['faname']
?><br></td>
<th>Date of Birth</th>
<td><?php
echo $_POST['dob']
?><br></td>

</tr>
<tr>
    <th>Institute Name</th>
    <td><?php
echo $_POST['iname']
?><br></td>
<th>Batch</th>
<td><?php
echo $_POST['batch']

?><br></td>

</tr>
</table>
    </div>

    <div id="marks"> <h3>SUBJECT MARKS</h3>
    <table>
        <tr>
            <th>SR. NO.</th>
            <th>SUBJECT NAME</th>
            <th>PASSING MARKS</th>
            <th>MARK OBTAINED</th>
        </tr>
        <tr>
    <td>1.</td>
    <td>HINDI</td>
    <td>100/35</td>
    <td><?php echo $_POST ['hin']; ?></td>
  </tr>
  <tr>
    <td>2.</td>
    <td>ENGLISH</td>
    <td>100/35</td>
    <td><?php echo $_POST['eng']; ?>
    </td>
  </tr>
  <tr>
    <td>3.</td>
    <td>PHYSICS</td>
    <td>100/35</td>
   <td><?php echo $_POST ['phy']; ?></td>
  </tr>

  <tr>
    <td>4.</td>
    <td>MATHS</td>
    <td>100/35</td>
   <td> <?php echo $_POST['math']; ?></td>
  </tr>

  <tr>
    <td>5.</td>
    <td>CHEMISTRY</td>
    <td>100/35</td>
   <td><?php echo $_POST['che']; ?></td>
  </tr>
    </table>
    </div>
    <div id="result">
    <table>
  <th>RESULT</th><br>
    <tr>
      <th>
        TOTAL :
        <td> <b><?php
 echo totalmarks($_POST);
$total=totalmarks($_POST);



 function totalmarks($arrayofsub){
   return $arrayofsub['hin']+  $arrayofsub['eng'] +  $arrayofsub['phy'] +  $arrayofsub['math']+ $arrayofsub['che'];
 }
 ?></b></td> 
</tr>
<tr>
        <th>PERCENTAGE :
      <td>
<?php
 percentage($total);
function percentage($totalmarks){

    echo ($totalmarks/500)*100 ;

    
}?>%</b>
</td>
      </th>
      <tr>
        <th>
          
        </th>
      </tr>
    </tr>
  
 </table>
 </div>


</body>
</html>

