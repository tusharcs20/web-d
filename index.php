<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);
         
        if($result)
        {
            if($result && mysqli_num_rows($result)> 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] == $password)
                {
                    
                    header("Location: log in.php");
                    die;

                } 
            }
        }
        
        
    }
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Smart Timetable</title>
	<style>
		{
    box-sizing: border-box;
}
body{
	background-image: url("images/back\ 2.jpeg");
	background-repeat: no-repeat;
	background-size: cover;
	margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;	
}

.wrapper{
    margin: 0 auto;
    width: 100%;
    max-width: 1140px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.container{
    position: relative;
    width: 100%;
    max-width: 600px;
    height: auto;
    display: flex;
    background: #ffffff;
    box-shadow: 0 0 5px #999999;
}
.login .col-left,
.login .col-right{
    padding: 30px;
    display: flex;
}
.login .col-left{
    width: 60%;
    clip-path: polygon(0 0, 0% 100%, 100% 0 );
    background: #44c7f5;
}
.login .col-right{
    padding: 60px 30px;
    width: 50%;
    margin-left: -10%;
}

@media(max-width: 575px){
    .login .container{
        flex-direction: column;
        box-shadow: none;
    }
    .login .col-left,
    .login .col-right{
     width: 100%;
     margin: 0;
     clip-path: none;
    }
    .login .col-right{
        padding: 30px;
    }

    
}


.login .login-text h2{
    margin: 0 0 15px 0;
    font-size: 30px;
    font-weight: 700;
}
.login .login-text p{
    margin: 0 0 20px 0;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
}



.login .login-form{
    position: relative;
    width: 100%;
}
.login .login-form h2{
    margin: 0 0 15px 0;
    font-size: 22px;
    font-weight: 700;
		}

.login .login-form p a{
    color: #44c7f5;
    font-size: 14px;
    text-decoration: none;
}


.login .login-form input{
    display: block;
    width: 100%;
    height: 35px;
    padding: 0 10px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 30px;
}

.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}

	
	</style>
</head>

<body>
	<div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
					<h2>Smart Timetable</h2>
                </div>
            </div>

            <div class="col-right">
                <div class="form_input">
                    <h2>Login</h2>
                    <form method ="POST" action='#'>
                        <p>
                            <label>Enter your College Email ID<span>*</span></label>
                            <input  type="text" name="user_name" placeholder="ENTER your college mail id"/>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" placeholder="enter your password"/>

                        </p><a href="log in.php" class="button">Submit</a>
                       
                        
                       
                        
                        <p>
                            <a href="">Forget password?</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
