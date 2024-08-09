<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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




    </table>



    </div>
</body>
</html>






<?php
echo $_POST['fname']
?><br>
<?php
echo $_POST['fname']
?><br>