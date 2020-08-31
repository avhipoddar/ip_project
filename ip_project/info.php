<?php
require "connection.php";
// echo $_GET['id'];
// echo '<br/>'; 
$sql="SELECT * FROM `sports` WHERE `sport_id` =".$_GET['id'].""; 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result); 
$sport_name=$row["sport_name"];
$sport_desc=$row["sport_desc"]; 
$sport_time=$row["timing"];
$sport_quote=$row["Quotes"]; 
$sport_fees=$row["sport_fee"];
$sport_days=$row["days"]; // echo $row["sport_name"]; //to print sport name 
//echo '<br />'; 
// echo var_dump($result); 
// echo $row["sport_desc"]; `//to printsport title 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <title><?php echo $sport_name //title ?></title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: cursive;
            /* background-color: black; */
        }

        .cover_image {
            margin: 0px;
            height: 500px;
            width: 100%;
            /* border: 2px solid black; */
        }

        .sport_title {
            font-size: 50px;
            /* font-weight: bold; */
            position: absolute;
            top: 300px;
            left: 100px;
            color: white;
        }

        .sport_quote {
            font-size: 20px;
            font-weight: bold;
            font-style: italic;
            /* border: 2px solid black; */
            width: 800px;
            height: 80px;
            position: absolute;
            margin-top: 50px;
            left: 7%;
            font-family: "Arial Narrow Bold", sans-serif;
            /* top:20px; */
        }

        .sport_desc {
            display: inline-block;
            position: relative;
            /* border: 2px solid black; */
            left: 7%;
            width: 800px;
            margin-top: 7%;
            /* text-justify: ; */
            text-align: justify;
        }

        .sport_time {
            position: relative;
            top: 20px;
            color: rgb(39, 46, 87);
            font-size: 19px;
            font-weight: bold;
        }

        .sport_fees {
            position: relative;
            top: 5px;
            font-weight: bold;
            color: rgb(39, 46, 87);;
            font-size: 19px;
        }

        .sport_days {
            position: relative;
            bottom: 10px;
            font-weight: bold;
            color: rgb(39, 46, 87);;
            font-size: 19px;
        }

        .sport_image {
            width: 430px;
            /* border: 2px solid black; */
            display: inline-block;
            height: 380px;
            position: relative;
            border-radius: 25px;
            left: 108%;
            box-shadow: 7px 7px rgb(119, 117, 117);
        }

        .more_images{
            /* border: 2px solid black; */
            display: inline-block;
            border: 3px solid white;
            border-radius: 20px;
            /* flex-direction: row; */
            /* left: 200px; */
            margin:20px;
            width: 250px;
            height: 180px;
            box-shadow: 7px 7px rgb(146, 146, 146);
        }
        .botoom_photos{
            /* border: 2px solid black; */
            position: relative;
            /* margin-left: 60px;
            margin-top: 2%; */
            margin: 2% 0 0 11%;
            /* border: 2px solid red; */
            width: 1200px;
        }
        .container_about{
            max-width:100%;
        }

        .row { 
  display: flex; 
  padding: 0 -8px; 
  border: 1px solid black; 
}
    </style>
</head>

<body>
    <div class="container_about" style="background-color: #5ca0f2;
background-image: linear-gradient(315deg, #5ca0f2 0%, #f5f7f6 74%);">
    <div class="sport_title">
        <p>
            <?php
                echo $sport_name;
        ?>
        </p>
    </div>
    <div>
        <?php
        echo '<img class="cover_image" src="https://source.unsplash.com/1600x1200/?sport,'.$sport_name.'" alt ="cover_image">';
      ?>

        <div class="sport_quote">
            <p>
                <?php
        echo $sport_quote;
        ?>
            </p>

            <div data-aos="fade-left" data-aos-duration="1500">
                <?php
                echo'<img class="sport_image" src="images/cricket_cover.jpg" alt="image">';
          ?>
            </div>
        </div>
        <div class="sport_desc">
            <p>
                <?php
                echo $sport_desc;
                ?>
            </p>

            <div class="sport_time">
                <p>
                    <?php
                echo "Time : ".$sport_time."";
                ?>
                </p>
            </div>

            <div class="sport_fees">
                <p>
                    <?php
                echo "Fees : ".$sport_fees."";
                ?>
                </p>
            </div>

            <div class="sport_days">
                <p>
                    <?php
                echo "Days : ".$sport_days."";
                ?>
                </p>
            </div>
            
            
        </div>
    </div>
    <div style="background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%); width: 100%; height:100%; margin:0;">

            <div class="botoom_photos"  data-aos="fade-down" data-aos-duration="2000" >
                <img class="more_images" src="images/cricket_cover.jpg" alt="" />
                <img class="more_images" src="images/cricket_cover.jpg" alt="" />
                <img class="more_images" src="images/cricket_cover.jpg" alt="" />
                <img class="more_images" src="images/cricket_cover.jpg" alt="" />
            </div>
            </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>