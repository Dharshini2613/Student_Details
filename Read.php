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
            color: silver;
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
            <a href="modify.html">Modify Student</a>
            <a href="Remove.html">Remove Student</a>
            <a href="Read.php">View Student</a>
        </div>
    </div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from stud_det";

$res=$conn->query($sql);
if($res->num_rows>0)
{  
    echo "<br><br><table border='1' align='center'>";

    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['SID'].'</td>';
      echo '<td>'.$row['SNAME'].'</td>';
      echo '<td>'.$row['SPHONE'].'</td>';
	  echo '<td>'.$row['SADDRESS'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>