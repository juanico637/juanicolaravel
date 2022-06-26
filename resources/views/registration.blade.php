<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
crossorigin="anonymous">
    
</head>
<body>

    <style class="reg-css">
        body{
            background-color: black;
            background-size: cover;
            min-height: 104vh;
        }
        form{
            width: 20rem;
            height: 40rem;
            background-color: pink;
            margin-left: 36rem;
            margin-top: 4rem;
            border-radius: 6px;
        }
        input{
            margin-left: 4rem;
            width: 12rem;
            height: 2rem;
            border-radius: 6px;
        }
       .regbtn{
            width: 5.6rem;
            height: 1.9rem;
            border-radius: 6px;
       }
       h1{
            margin-left: 3.7rem;
            padding-top: 2rem;
            font-family: Arial;
       }
       button{
            margin-left: 7rem;
            color: pink;
            background-color: black;
       }
       button:hover{
            background-color: pink;
            color: black;
            cursor: pointer;
            box-shadow: 0 0 10px black;
       }
       p{
            margin-left: 4.4rem;
       }
       .outer{
            width: 22rem;
            height: 42rem;
            border-color: pink;
            margin-left: 34.9rem;
            margin-top: -41rem;
            border-radius: 6px;
            border-style: solid;
       }
       .alerts{
            margin-left: 2rem;
            margin-top: -2rem;
       }

    </style>


<div id="box">
          
        <form method="post"class="regbox" action="{{route('register-user')}}">
       
            @csrf
                <h1>REGISTER</h1><br>

                <div>
                    <input id="text" type="text" name="mem_id" placeholder="Member ID" value="{{old('mem_id')}}" required><br><br>
                    <input id="text" type="text" name="fname" placeholder="First Name" value="{{old('fname')}}" required><br><br>
                    <input id="text" type="text" name="lname" placeholder="Last Name" value="{{old('lname')}}" required><br><br>
                    <input id="text" type="text" name="email" placeholder="Email" value="{{old('email')}}" required><br><br>
                    <input id="text" type="text" name="username" placeholder="Username" value="{{old('username')}}" required><br><br>
                    
                    <input id="password"  type="password" name="password" placeholder="Password" required><br><br>
                </div>
                
                <button class="regbtn" id="button"  type="submit" value="Sign up">Submit</button><br><br>
                <p>Already a member? <a href="{{url('/')}}">Login.</a><br><br></p>

                <div class="alerts">
                    @if(Session::has('success'))
                    <div class="alert text-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert text-danger">{{Session::get('fail')}}</div>
                    @endif
                </div>
                
            </form>
            <div class="outer"></div>
</div>

</body>
</html>
