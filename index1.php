<!doctype html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script  src="details.json" ></script>
  <script  src="jsonEx.json" ></script>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<style>
body{
background-color:#0d689b;
}
.main{
width:100%;
height:600px;
}
.medicineInput{
top:20%;
left:25%;
position:relative;
background-color:tranparent;
}
#resultTable tr,td,th{
   padding:10px;
   border:3px  solid white;
   border-collapse: collapse;
   border:3px  solid white;
   color:white;
   
}
input {
  border:5px solid black;
  border-radius:10px;
    background-color:white;
    color: black;
}
span{
color:white;
font-size:20px
}
p{
color:white;
}
#result{
color:white;
}
#tablePos{
position:absolute;
top:400px;
left:350px;
display:none;
}
#button{
position:absolute;
left:230px;
top:200px;
align:center;
}
#listDiv{
position:absolute;
left:490px;
top:160px;
align:center;
}
#creater{
color:white;
position:absolute;
right:0;
bottom:0;
}
#admin{
position:absolute;
right:70px;
}
#logout1{
position:absolute;
right:0px;
}
</style>
<script src="script.js">
</script>
<title>
Medicine bill generator
</title>

</head>
<body>
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
<div class="main">
<div id="admin">
<a href="admin.php">
<button id="adminlogin" class="btn btn-primary" >Update</button>
</a>
</div>
<div class="medicineInput">
<span>Enter Medicine Name</span><input id="nameInput" type="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span>Quantity</span><input type="number"  id="numberId" value="" max="10" min="1">&nbsp;&nbsp;&nbsp;<button type="button" id="add" class="btn btn-warning btn-sm">ADD</button>&nbsp;&nbsp;&nbsp;<button type="button" id="reset" class="btn btn-info btn-sm">Reset</button>
<br>
<div id="button">
<center><button type="button" id="calc" class="btn btn-primary">Calculate</button></center>
</div>
</div>
<div id="listDiv">
<ul id="list" type="none">
</ul>
</div>
<div id="tablePos">
<table id="resultTable">
<tr id="tr2"><th >S.No</th><th>Medicine Name</th><th>Quantity</th><th>Price/Item</th><th>Total Price</th></tr>
</table>
<div>
</div>
</div>
    <div id="editor"></div>
   <!-- <button id="cmd">Generate PDF</button>-->

</body>


</html>