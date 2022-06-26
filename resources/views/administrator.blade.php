<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css
">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js
"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js
"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js
"></script>

	<title>My website</title>
	<link rel="stylesheet" href="stylesheet4.css">
</head>

<body>

	<style type="text/css">
        *{
            padding: 0%;
            margin: 0%;
        }
		body{
            background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%), url("/img/bpp.jpg");
			background-size: cover;
			width: max-content;
            max-width: 100%;
			align-items: center;
		}
        .container{
            width: 100%;
            margin-top: 2rem;
        }
		td{
			justify-content: center;
			color: white;
		}
		table{
			margin-left: 14rem;
			margin-top: -1rem;
		}
		h2{
			margin-left: 12rem;
			margin-top: 2rem;
		}

		.lg{
			width: 20px;
			font-weight: 600;
			padding: 5px;
			font-size: 16px;
			height: 12px;
			border-radius: 2px;
			color: white;
			margin-top: -50rem;
			margin-left: 2rem;
			background-color: rgb(42, 47, 65);
		}
	
		a:hover{
			color: white;
			text-decoration: none;
		}
        .nav{
           
            color: black;
            height: 5rem;
            max-width: 100%;
            margin-left: 31rem;
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
            color: white;
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

<div class="container">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Member ID</th><br>
        <th>First name</th>
        <th>Last name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Action</th>

      </tr>
    </thead>
	<tbody>
	<?php
		$con= mysqli_connect("localhost","root","");
        $mysql= mysqli_select_db($con,"juanico_final");
		$query=mysqli_query($con,"SELECT * FROM users");
		
		
			
	?> 
    <?php
        
        while($row = mysqli_fetch_array($query)){
         echo "
         <tr>
            <td>$row[mem_id]</td>
            <td>$row[fname]</td>
            <td>$row[lname]</td>
            <td>$row[email]</td>
            <td>$row[username]</td>
            <td>$row[password]</td>
            
            <td align='center'><a style='text-decoration:none;color:pink;' href='http://127.0.0.1:8000/delete?id=$row[mem_id]'>Delete</a></td>

  
         </tr>
         ";
        }
        
        ?>

    </tbody>
</table>
</div>


</body>


</html>