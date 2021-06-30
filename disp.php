<html>
    <head>
        <style>
            body{
                font-size:20px;
				background-color:lightgrey;
				
            }
            table{
				align-items:center;
				position:relative;
				width:50%;
				border:2px solid black;
				background-color:lightgrey;
                font-size:20px;
            }
			td,th{
				padding:10px 25px 10px 25px;
				margin:0px;
			}
			</style>
            </head>
            <body>
			
<?php
$cc=mysqli_connect("localhost","root","","train");
if($cc->connect_error)
    echo "connection failed";
else
{
  if(isset($_POST['s1']))
    {
        $v=($_POST['id']);
        $w=($_POST['name']);
        $x=($_POST['addr']);
		$a=($_POST['tname']);
        $y=($_POST['tno']);
        $z=($_POST['date']);
        $q="insert into tname values('$v','$w','$x','$a','$y','$z');";
        if($cc->query($q))
        {
            echo "<script>alert('Successfully inserted');</script>";
        } 
    
    
        $sql="select * from tname";
        $result = $cc->query($sql);
        echo "<center><br><br><br>";
        echo "<table border='1'><caption><b>LIST OF ENTRIES</caption><tr>
	    
	    <td><b>name</td>
		<td><b>train name</td>
        <td><b>train no</td>
	    <td><b>date of journey</td>
	    </tr>";
        while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td> " . $row['name']. "</td><td>" .$row['tname']."</td><td>".$row['tno']."</td><td>".$row['tdate']."</td></tr>";
            }
        echo "</table>";
        echo "</center>";
    }
}
$cc->close();
?>
<a href="insert.php"><center><h2>BACK</h2></a>
			</body>
        </html>