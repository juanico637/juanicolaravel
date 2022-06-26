<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="app.css">
</head>
<body>
<img src="/img/bp.png" class="bg">
    <style class="text/css">
        *{
            padding: 0%;
            margin: 0%;
        }
        body{
            background-color: black;
        }
        .bg{
            background-size: cover;
			width: 95%;
        
        }
        .title{
            margin-left: 4rem;
            font-family: 'Arial';
            font-size: 35px;
        }
        .log{
            margin-left: 70rem;
            margin-top: -33.12rem;
            color: white;
        }
        input{
            color: #f4a7bb;
            width: 15rem;
            height: 2rem;
            border-radius: 6px;
            border: 0.12rem;
            border-color: #f4a7bb;
            background: transparent;
            border-style: solid;
            box-shadow: 0 0 10px #9ecaed;
        }
        label{
            color: white;
            font-family: Arial;
            letter-spacing: 2px;
        }
        .loginbtn{
            width: 6rem;
            height: 25px;
            border-radius: 5px;
            margin-left: 4.7rem;
            color: black;
            letter-spacing: 2px;
            background-color: #f4a7bb;
            font-weight: 600;
            font-size: 13px;
            cursor: pointer;
        }
        .loginbtn:hover{
            background-color: black;
            color: #f4a7bb;
            border-color: pink;
            box-shadow: 0 0 10px #f4a7bb;
        }
        p{
            margin-left: 1rem;
        }
        a{
            color: pink;
        }

    </style>

    <div id="box" class="log">
		
		<form method="post" action="{{route('login-user')}}">
            @csrf
			<div class="title">LOGIN</div><br>

			<Label>Username</Label><br><br>
			<input id="text" type="text" name="username" required><br><br>

			<Label>Password</Label><br><br>
			<input id="text" type="password" name="password" required><br><br><br>

			<button id="button" type="submit" value="LOGIN" class="loginbtn">LOGIN</button><br><br>

			<p>Not a member yet? <a href="{{url('registration')}}">Click here.</a></p><br><br>
		</form>
	</div>

</body>
</html>
