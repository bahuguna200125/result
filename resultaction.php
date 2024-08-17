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

if($_POST['hin']<0||$_POST['hin']>100){
   echo "Wrong Input in Hindi";
exit;
}

 
if($_POST['eng']<0||$_POST['eng']>100){
    echo "Wrong Input in English";  
exit;
}
if($_POST['math']<0||$_POST['math']>100){
    echo "Wrong Input in Maths";
 exit;

}
if($_POST['phy']<0||$_POST['phy']>100){
    echo "Wrong Input in Physics";
exit;
}
if($_POST['che']<0||$_POST['che']>100){
    echo "Wrong Input in Chemistry";
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
<tr>
<td id="per" colspan="2">PASS/FAIL/PASS WITH GRACE</td>
    <td>
<?php
$fail = false;
$fail_sub_marks = 0;
$total_fail_sub = 0;

$subjects = ['hin', 'eng', 'math', 'phy', 'che'];

foreach ($subjects as $subject) {
    if ($_POST[$subject] < 33) {
        $fail = true;
        $total_fail_sub++;
        $fail_sub_marks = $_POST[$subject];
    }
}

if ($fail) {
    if ($total_fail_sub == 1 && $fail_sub_marks >= 25) {
        echo "YOU'RE PASS WITH GRACE";
    } else {
        echo "YOU'RE FAIL";
    }
} else {
    echo "YOU'RE PASS";
}
?>
</td>
</tr>

    </table>
    </div>

</body>
</html>




