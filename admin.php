<!doctype html>
<head>
<title>
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="adminscript.js"></script>
    <script  src="details.json" ></script>
  <script  src="jsonEx.json" ></script>
<style>
body{
background-color:#0d689b;
}

#inputPos{
position:absolute;
width:100%;
height:100px;
left:70px;
top:50px;
}

input {
  border:5px solid black;
  border-radius:10px;
    background-color:white;
    color: black;;
}
span{
color:white;
font-size:20px
}
table tr,td{
   padding:30px;
   border:none;
   border-collapse: collapse;
}
button{
width:80px;
}

#resultTable tr,td,th{
   padding:10px;

   border-collapse: collapse;

   color:white;
   
}
#tablePos{
position:absolute;
top:40px;
right:220px;
display:none;
}
#logout1{
position:absolute;
right:0px;
}
</style>
<?php
session_start();
          $name=$_SESSION['name'];  
          if(!isset($name)){
			           session_start();
         session_destroy();
          header('location:index.html');
		  }	
else{		  
	   echo'<a href="signout.php"><button id="logout1" class="btn btn-primary" >Logout</button></a>';
}
?>
</head>
<body>
<div id="inputPos">
<table>
<tr><td><span>Add Medicine</span></td><td><input id="addName" type="text" placeholder="medicineName"></td><td><input id="addQuantity" placeholder="Price" max="1000" min="1" type="number"></td><td><button type="button" id="Add" class="btn btn-warning btn-sm">ADD</button></td></tr>
<tr><td><span>Update Price</span></td><td><input id="updateName" type="text" placeholder="medicineName"></td><td><input id="updatePrice" placeholder="Price" type="number" max="1000" min="1"></td><td><button type="button" id="Update" class="btn  btn-warning btn-sm">Update</button></td></tr>
<tr><td><span>Delete  Medicine</span></td><td><input id="deleteMedi" type="text" placeholder="medicineName"></td>><td></td><td><button type="button" id="Delete" class="btn btn-warning btn-sm">DELETE</button></td></tr>
</table></div>
<div id="list">
</div>
<div id="tablePos">
<table id="resultTable">
<tr><th>sNo</th><th>MedicineName</th><th>Price</th></tr>
</table>
</div>
</body>
</html>