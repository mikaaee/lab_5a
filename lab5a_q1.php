<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
    <h2> Lab5 Question 1</h2>
 <?php
 $name = "Amirah Zulaikha Binti Azmi";
 $matric_no = "AI220207";
 $course = "Software Engineering";
 $year_study = "Year 3";
 $address = "UTHM Parit Raja Batu Pahat Johor";
 ?>
 <table border="1" >
 <tr>
 <td>Name</td>
 <td><?php echo "$name"; ?></td>
 </tr>
<tr>
<td>Matric Number</td>
<td><?php echo "$matric_no"; ?></td>
 </tr>
 <tr>
 <td>Course</td>
 <td><?php echo "$course"; ?></td>
 </tr>
<tr>
 <td>Year of Study</td>
 <td><?php echo "$year_study"; ?></td>
 </tr>
 <tr>
 <td>Address</td>
 <td><?php echo "$address"; ?></td>
 </tr>
 </table>

</body>
</html>