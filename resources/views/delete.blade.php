<?php
//delete.php
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"juanico_final"); 

$query = mysqli_query($con, "DELETE FROM users WHERE mem_id= '".$_GET['id']."'");

if(!$query){
	echo "Record not deleted!";
}
else{	
	echo"Record Successfully Deleted  ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete</title>
</head>
<body>
	<style>
		body{
			font-size: 3rem;
			color: black;
			text-align: center;
			justify-content: center;
			background-image: url(/img/bg4.jpg);
			max-width: 100%;
			background-size: cover;
			margin-top: 5rem;
		}
		div{
			margin-left: -16rem;
			margin-top: -9rem;
		}
		.nav{
		   color: black;
		   height: 5rem;
		   max-width: 100%;
		   margin-left: 10rem;
		   margin-top: -1rem;
		   transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
	   }
	   .nav li{
		   display: inline-block;
		   font-size: 20px;
		   padding: 15px;
		   margin-top: 1.5rem;
	   }
	   .nav a{
		   color: black;
		   font-size: 15px;
		   font-family: 'Arial';
		   text-decoration:none;
		   letter-spacing: 1px;
		   margin: 1 -.25rem;
		   padding: 0 .25rem;
		   margin-left: 2rem;
		   text-decoration: solid underline pink 2px;
	   }
	   .nav a:hover{
		   color: pink;
		   padding: 6px;
		   background-color: black;
		   transform: translate(20%);
		   transition-duration: 700ms;  
		   border-radius: 4px;    
		   text-decoration: none;  
	   }
	</style>

		<div>
            <ul class="nav">
                <li><a href="{{url('/dashboard')}}">Home</a></li>
                <li><a href="{{url('administrator')}}">Administration</a></li>
                <li><a href="{{url('add')}}">Add Member</a></li>
                <li><a href="{{url('/')}}">Logout</a></li> 
            </ul>
        </div>
</body>
</html>
