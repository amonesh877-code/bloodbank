<?php
$conn = mysqli_connect("localhost","root","","bloodbank");

if(!$conn){
    die("Connection Failed");
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($check) > 0)
    {
        header("Location: admin_dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:linear-gradient(to bottom right,#fff5f5,#ffe6e6);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .container{
            width:1200px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:40px;
        }

        .left{
            width:55%;
            text-align:center;
        }

        .logo-title{
            display:flex;
            align-items:center;
            justify-content:center;
            margin-bottom:30px;
        }

        .logo-title .drop{
            font-size:70px;
            margin-right:20px;
        }

        .logo-title h1{
            font-size:60px;
            color:#4a4a4a;
            font-weight:bold;
        }

        .image-box{
            background:white;
            border-radius:25px;
            width:700px;
            height:450px;
            margin:auto;
            position:relative;
            box-shadow:0 10px 30px rgba(0,0,0,0.1);
        }

        .bag{
            position:absolute;
            left:120px;
            top:80px;
            width:120px;
            height:180px;
            border:6px solid #65748b;
            border-radius:30px;
            background:white;
        }

        .blood{
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
            height:90px;
            background:#9b1c1c;
            border-radius:0 0 24px 24px;
        }

        .line{
            position:absolute;
            left:240px;
            top:165px;
            width:280px;
            height:4px;
            background:#a61b1b;
        }

        .heart{
            position:absolute;
            left:320px;
            top:180px;
            font-size:130px;
            color:#b91c1c;
        }

        .doctor{
            position:absolute;
            left:160px;
            bottom:40px;
            font-size:70px;
        }

        .drop1{
            position:absolute;
            right:120px;
            top:120px;
            font-size:45px;
        }

        .drop2{
            position:absolute;
            right:180px;
            bottom:100px;
            font-size:35px;
        }

        .right{
            width:400px;
            background:white;
            padding:40px;
            border-radius:25px;
            box-shadow:0 10px 30px rgba(0,0,0,0.15);
        }

        .right h2{
            text-align:center;
            color:#b91c1c;
            font-size:38px;
            margin-bottom:30px;
        }

        .input-box{
            margin-bottom:20px;
        }

        .input-box input{
            width:100%;
            padding:15px;
            border:1px solid #ddd;
            border-radius:10px;
            font-size:17px;
        }

        .btn{
            width:100%;
            padding:15px;
            background:linear-gradient(to bottom,#ff2b2b,#b30000);
            border:none;
            color:white;
            font-size:24px;
            border-radius:10px;
            cursor:pointer;
            font-weight:bold;
        }

        .btn:hover{
            background:linear-gradient(to bottom,#e60000,#800000);
        }

        .links{
            display:flex;
            justify-content:space-between;
            margin-top:20px;
        }

        .links a{
            text-decoration:none;
            color:#b91c1c;
            font-size:14px;
        }

        .footer{
            text-align:center;
            margin-top:25px;
            color:#666;
        }
    </style>
</head>
<body>

    <div class="right">
        <h2>Login to Your Account</h2>

        <form method="POST">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="login" class="btn">LOGIN</button>
        </form>

        <div class="links">
            <a href="#">Forgot Password?</a>
            <a href="#">Create Account</a>
        </div>

        <div class="footer">
            🩸 Donate Blood, Save Lives
        </div>
    </div>

</div>

</body>
</html>