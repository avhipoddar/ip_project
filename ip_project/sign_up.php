<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>signUp</title>
<style>
    body,html{
    margin: 0px;
    padding: 0px;
    background-image:url('/sports/images/sign_up.jpg');
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
        font-size: 1.75rem;
        display: block;
        /* font-weight: 550; */
        text-align: center;
        margin-bottom: 0px;
    }
    .form_item{
        /* font-family: cursive,'Arial Narrow', Arial, sans-serif; */
        display: block;
        margin: 10px;
        font-size: 16px;
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
        font-size:15px;
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
    .text-muted{
        font-size: 15px ;
        opacity: 0.6;
    }
    .buttons{
        font-size: 30px;
        /* background-color: brown; */
        display: block;
        width:500px;
        justify-items: center;
        text-align: right;
        margin-left: 200px;
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
    .signUp_btn{
        border-radius: 5px;
        font-family: cursive,'Arial Narrow', Arial, sans-serif;
        color: white;
        background-color: rgb(0, 140, 255);
        font-size: 20px;
        width: 250px;
    }
    .signUp_btn:hover{
        background-color: rgb(2, 110, 199);
    }
    /* The alert message box */
    .alert_red {
    padding: 20px;
    background-color: #ff796f; /* Red */
    color: white;
    margin-bottom: 15px;
    }

    .alert_green {
    padding: 20px;
    background-color: #59eb4c; /* Red */
    color: white;
    margin-bottom: 15px;
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
    }

    /* When moving the mouse over the close button */
    .closebtn:hover {
    color: black;
    }
    </style>
</head>
<body>
    <?php
    $showError=false;
    $showAlert=false;
    require "connection.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo $_SERVER['REQUEST_METHOD'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        

        if(!isset($username) || !isset($email) || !isset($password) || !isset($cpassword)){
        $showError=true;
        }
        else{
            if($password == $cpassword ){
            // echo "Password matched";
            $sql= "INSERT INTO `sign_up` (`username`, `email id`, `password`, `datetime`) VALUES ('$username', '$email', '$password', current_timestamp())";
            $result=mysqli_query($conn,$sql);
                if($result){
                    $showAlert= true;
                }
                else{
                    echo '<div class="alert_red">
                    <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                    Username Already Exists!
                    </div>';
                }
            }
            else{
            echo '<div class="alert_red">
            <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            <strong>Error! </strong>Password Do Not Matched!
        </div>';
            }
        }
    }
    
    if($showAlert){
        echo '<div class="alert_green">
        <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
        sucess! you can log in!.
      </div>';
    }
    if($showError){
      echo '<div class="alert_red">
      <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
      <strong>Error! </strong>Invalid credentials !
        </div>';
      
      
    }
    ?>


    <div class="container">
        <p class="title">Let's SignUp</p>
        <form action="\sports\sign_up.php" method="post">
            <div class="form_item">
            <label for="username">Username </label>
                <input class="form_input" type="text" name="username" id="username" placeholder="Username" required>
                <small id="nameHelp" class="text-muted">Username should be unique.</small>
            </div>
            <div class="form_item">
            <label for="email">Email address </label>
                <input class="form_input" type="text" name="email" id="email" placeholder="Email address" >
                <small id="email_small" class="text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form_item">
            <label for="password">Password </label>
                <input class="form_input" type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form_item">
            <label for="cpassword">Confirm Password </label>
                <input class="form_input" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
            </div>
            <div class="buttons">
                <input class="go_home_btn" type="button" value="Go Home" onclick="window.location.href='index.php'">
                <input class="signUp_btn" type="submit" value="SignUp">
            </div>
    </div>
</body>
</html>