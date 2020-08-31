<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>sports</title>
    <style>
    body{
        margin: 0px;
        padding: 0px;
        font-family:cursive;

        background-color: black;
    }
    .cards{
        /* margin: */
        margin-left:-10px;
        border: 0px;
    }
    .sport_image {
        margin: 0px;
        display:inline-block;
        /* width:341px; */
        width: 25%;
        /* height: 250px; */
        padding: 0px;
        border: 0px;
        border-radius: 0px;
        position: relative;
    background: #000;
    }
    .aise{
        position: absolute;
        width: 100%;
        height: 290px;

   opacity: 0;
  transition: 0.5s ease;
  background-color: red;
  z-index:1;
    }
    .sport_image:hover {
        transition: 500ms ease-in-out;
        /* transform: scaleY(1.2); */
        /* transform: scaleX(1); */
        z-index: 1;
        transform: translateY(-7%);
        opacity:1;
        color: #000;
        
    }
    .aise:hover{
        transition: 0.7s ease;
        opacity:0.6;
    }
    .card-img-top{
        width: 100%;   
        height: 290px;
        border-radius:0px;
        position:relative;
    }
    .card-img-top:hover{
        /* filter: blur(3px); */
        cursor: pointer;
        
    }
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 30px;
        opacity: 1;
        color: black;
        text-decoration: none;
        z-index:1;


    }
    .centered:hover{
        /* position: relative; */
        opacity: 1;
        /* transition: all ease-in-out 0.5s; */
        color: #FF4500;
        text-decoration: none;
        font-weight: bold;
        z-index:1000;
    }
    /* @media screen and (min-width:1024px){
        .cards{
            margin: 10px;
            background-color: black;
        }
    }

    @media only screen and (min-width:360px) and (max-width: 480px){
        .sport_image{
            display: block;
            /* width: 150px; */
            /* margin:auto;
            margin-top: 10px; */
            /* background-color: black; */
        /* }
    } */

    /* @media only screen and (min-width:481px) and (max-width: 669px){
        .sport_image{
            display: block;
            width: 1.2vh;
            margin:auto;
            margin-top: 10px;
            background-color: red;
        }
    } */
    </style>
  </head>
  <body>
      <?php
      echo $_SESSION['login'];
      if ($_SESSION['login']){
      echo $_SESSION['username'];
      }
    //   $_SESSION['login']=true;
    //   $_SESSION['username']= $username;
    //   $_SESSION['display']='show';
      ?>
      <h2 style="display: inline-block;">testing</h2>
      <button onclick="window.location.href='sign_in.php';">signIn/SignUp</button>
      <button onclick="window.location.href='membership.php';">Take Membership</button>
      <button onclick="window.location.href='logout.php';">Log out</button>
    <?php
        require 'connection.php';
    
    $sql="SELECT * FROM `sports`";
    $result=mysqli_query($conn,$sql);
    echo"<div class='cards'>";
    $srno=0;
        while($row=mysqli_fetch_assoc($result)) {
            $title=$row['sport_name'];
            $id=$row['sport_id'];
            echo '<div class="sport_image">
            
            <a href="info.php?id='.$id.'">  <div class="aise" > </div>  </a>
                    
                <a href="info.php?id='.$id.'"><img src="images/'.$title.'.jpg" id="card-img-top" class="card-img-top" alt="image" onmouseover="blur_image('.$srno.');" onmouseout="remove_blur('.$srno.');"></a> 
                <a id="link'.$id.'"class="link centered" href="info.php?id='.$id.'" onmouseover="blur_image('.$srno.');" onmouseout="remove_blur('.$srno.');">'.$title.'</a>
            
            </div>';      
            $srno=$srno+1;
        }   
    echo"</div>";
    ?>

    <!-- <img src="https://source.unsplash.com/hockey,sports/1600x1200" alt="" style="width: 336px;"> -->
    <!-- <img src="https://source.unsplash.com/336x200/?nature" alt=""> -->
    
    <!-- <img src="/sports/images/cricket.jpg" alt="image" style="width: 300px;"> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        function blur_image(id){
            // console.log("hello");
            // console.log(id);

            value=document.getElementsByClassName("card-img-top")[id]
            // console.log(value);
            // value.style.color="orange";
            value.style.filter="blur(3px)";
        }
        function remove_blur(id){
            value=document.getElementsByClassName("card-img-top")[id]
            value.style.filter="blur(0px)";
        }

        // function script() { 
        // document.addEventListener("DOMContentLoaded", function(event) { 
        // var comment=document.getElementsByClassName("cart-img-top")
        // console.log(comment);
        // var colors = ['#ff0000', '#00ff00', '#0000ff'];
        // for (var i in comment){
        // console.log("link"+i);
        // console.log(i);
        // var random_color = colors[Math.floor(Math.random() * colors.length)];
        // document.getElementById('link'+i).style.color = random_color;
        // $('#link'+i).css('color', random_color);
        // }
        // });
    </script>
  </body>
</html>