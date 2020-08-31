

<?php
    require 'connection.php';
    session_start();
    $_SESSION['login']=false;
    // $_SESSION['username']= $username;
    // $_SESSION['display']='show';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username=$_POST['username'];
        $password=$_POST['password'];
    $sql= "SELECT * FROM `sign_up` WHERE `username` = '$username' AND `password` = '$password'";
    $result= mysqli_query($conn,$sql);
    // echo var_dump($result);
    // echo $sql;
    $num= mysqli_num_rows($result);
    if($num==1){
        // echo '<div class="alert_green">
        // <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
        // <strong>Success </strong>You are successfully Logged in.
        //   </div>';
          $_SESSION['login']=true;
          $_SESSION['username']= $username;
          header("location: index.php");
          exit;
    }
    else{
        echo '<div class="alert_red">
        <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
        <strong>Error! </strong>Invalid credentials!
        </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <style>
        body,html{
            margin: 0px;
            padding: 0px;
            background-image:url('images/sign_up.jpg');
            height:100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            font-family: cursive,'Arial Narrow', Arial, sans-serif;
            }
        .container{
            /* border: 2px solid red; */
            width: 800px;
            margin: auto auto;
            height: 600px;
            /* text-align: center; */
            justify-items: center;
            /* padding: 10px; */
        }
        .title{
            font-size: 30px;
            display: block;
            /* margin: auto; */
            text-align: center;
        }
        .form_item{
            /* font-family: cursive,'Arial Narrow', Arial, sans-serif; */
            display: block;
            margin: 10px;
            font-size: 20px;
            /* font-weight: bold; */
            text-align: center;
        }
        .form_input{
            font-family: cursive,'Arial Narrow', Arial, sans-serif;
            display: block;
            margin: auto;
            margin-top: 10px;
            padding-left: 10px;
            /* text-align: center; */
            width: 600px;
            height: 30px;
            font-weight: bold;
            outline: none;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: hidden;
            /* background-color: #eee; */
            /* border-radius: 5px; */
        }
        input:focus, textarea:focus, select:focus{
        outline: none;        
        }
    .checkbox{
        /* display: inline-block; */
        /* width: 100%; */
        /* margin-left: 100px; */
        /* background-color: brown; */
    }
    .checkbox_input{
        /* border: 2px solid red;
        background-color: brown; */
        /* display: inline-block; */
        /* width:300px;
        text-align: center;
        padding: 0px;
        margin: 0px; */
        margin-left: 330px;
        margin-top: 20px;
    }
    .para{
        /* border: 1px solid black; */
        display: inline-block;
        font-size:17px;
        /* font-weight: bold; */
        margin-left:300px;
    }
    .sign_up_link{
        text-decoration: none;
        color: rgb(0, 140, 255);
    }
    .sign_up_link:hover{
        text-decoration-line:underline;
        color:rgb(2, 110, 199);
    }
    .buttons{
        font-size: 30px;
        /* background-color: brown; */
        display: block;
        width:500px;
        justify-items: center;
        text-align: right;
        margin: auto;
    }
    .go_home_btn{
        border-radius: 5px;
        font-family: cursive,'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
        background-color: gray;
        color: white;
    }
    .go_home_btn:hover{
        background-color: rgb(93, 91, 91);
        /* color: red; */
    }
    .login_btn{
        border-radius: 5px;
        font-family: cursive,'Arial Narrow', Arial, sans-serif;
        color: white;
        background-color: rgb(0, 140, 255);
        font-size: 20px;
        width: 250px;
    }
    .login_btn:hover{
        background-color: rgb(2, 110, 199);
    }
        /* The alert message box */
    .alert_red {
    padding: 20px;
    margin-bottom: 15px;
    color: #721c24;
    background-color: #f8c2c7;
    border-color: #f8c2c7;
    border-radius: 5px;
    }

    .alert_green {
    padding: 20px;
    margin-bottom: 15px;
    color: #155724;
    background-color: #a6ffbb;
    border-color: #a6ffbb;
    }

    /* The close button */
    .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
    /* transition: opacity .15s linear; */

    }
    /* When moving the mouse over the close button */
    .closebtn:hover {
    color: black;
    }
    </style>
</head>
<body>



    <div class="container">
        <p class="title">Let's Login</p>
        <form action="" method="post">
            <div class="form_item">
            <label for="username">Username </label>
                <input class="form_input" type="text" name="username" id="username" placeholder="Username" required>
                <!-- <small id="nameHelp" class="form-text text-muted">Username should be unique.</small> -->
            </div>
            <div class="form_item">
            <label for="password">Password </label>
                <input class="form_input" type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-item">
                <input class="checkbox_input" type="checkbox" id="Check">
                <label class="checkbox" for="Check">Remember me</label>
            </div>

            <div class="para">
                <p>Don't have account?</p>
            </div>
            <a class="sign_up_link" href="/sports/sign_up.php">SignUp</a>
            <div class="buttons">
                <input class="go_home_btn" type="button" value="Go Home" onclick="window.location.href='index.php'">
                <input class="login_btn" type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>