<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: skyblue;
        }

        #hd {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

    <div id="hd">
        <h3 align="center">Student Details
		
            <hr>
			
        </h3>

        <div id="nav">
            <a href="Home.html">Home</a>
            <a href="New_student.html">New Student</a>
            <a href="Modify.html">Modify Student</a>
            <a href="Remove.html">Remove Student</a>
            <a href="Read.php">View Student</a>
        </div>
    </div>

<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

//create connection
$conn=new mysqli($host,$user,$pass,$db);


$sna=$_POST['sna'];
$sph=$_POST['sph'];
$sadd=$_POST['sadd'];


$sql="insert into stud_det(SNAME,SPHONE,SADDRESS) values('$sna','$sph','$sadd')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>
</body>
</html>