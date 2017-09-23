<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
 $password = "";
 $name=$_POST["name"];
  $passwordDb=$_POST["pwd"];
$dbname = "medicinedetails";
$conn = mysqli_connect($servername, $username, $password,$dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name,password FROM login where name='".$name."' and password='".$passwordDb."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "Correct";
   /* while($row = mysqli_fetch_assoc($result)) {
        echo "Name " . $row["name"]. " -password: " . $row["password"]. " ";
    }*/
	    $_SESSION['name']=$name;
		$_SESSION['password']=$password;
	  header('location:index1.php');
} else {
    echo "Invalid Username or Password";
}

mysqli_close($conn);

?>