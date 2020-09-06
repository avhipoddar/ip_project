<!DOCTYPE html> 
<html> 
	<head> 
	        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS style to put div side by side -->
		<style type="text/css"> 
                
		.container { margin:0;
			width:100%; 
			height:1000px; 
			background-image: url(whyUsBg.jpg); 
			background-attachment: fixed; 
		} 
                body{
                     margin:0;
                     }
                .container background-image{ margin:auto; max-width:100%; height:100%;}
		#st-box { 
			float:left; 
			
                        vertical-align:middle;
                        position:absolute;
                        top: 50%;
                        left:10%;
                        bottom:50%;
		} 
		#nd-box {font-size:22px;
                         text-align:left;
			float:left; 
			width:500px; 
			height:400px; 
			position: absolute;
                        bottom: 0;
                        background: rgb(0, 0, 0); 
                        background: rgba(0, 0, 0, 0.1);
                        color: #f1f1f1;
			margin-left:20px; 
                        vertical-align:middle;
                        top: 50%;
                        right:5%;
                        bottom:50%;
		} 
               .container1{margin:auto; width:100%; height:900px;background: linear-gradient(-45deg, #ee7752, #FFFFFF, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;}
                     @keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
                 #div1{ 
			float:left; 
                        padding:5%;
			} 
                 #div2 { padding: 5%;
                         font-size:25px;
                         float:left; 
			width:320px; 
			height:300px; 
                        color: black;
			} 
                        #div4 { padding:5% 5% 5% 5%;
			float:left; 
			} 
                #div3,#div5 { padding: 5% 5% 5% 5%;
			float:right;
                     } 
		#submit:hover {
                        transform: scale(1.3);
                         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
                         
                       }
                .tab { 
            display: inline-block; 
             margin-left:100px;
                     } 
                .container2 
                       { margin:0;
			width:100%; 
			height:1110px; 
			background-image: url(techBg.jpg); 
                        background-attachment: fixed;
			}
                 .glow {
  font-size: 45px;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
} 
hr.red{
 {
  border: 1px solid red;
}

		</style> 
	</head> 
	
	<body> 
                
		<div class="container"> 
			<div id="st-box"> 
			    <video width="500" height="400"  controls>
                            <source src="APS Academy.mp4" type="video/mp4">
                            </video>
			</div> 
			
			<div id="nd-box"> 
                                <h1 class="glow" style="color:white; font-variant: small-caps;"><b> Why Us </b></h1>
				<p> 
			APS Academy- an integral part of APS School was founded in 2009 and in a short span has already established itself as a prime sports institution in sports area. It has earned a high reputation and utmost popularity for being the best equipped sports academy that offers international 
                               facilities in the most congenial atmosphere. Once you enter the sports academy you will experience the latest in group fitness programming and innovating 
                               fitness equipment and genuine support of our certified staff that will help you.
                               </p> 
                               <div style="left:10%;">
                               <input type="submit" id="submit" value="Read More" size="20" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 15px;margin-right: 25px; transition: transform .2s;">
                               <input type="submit" id="submit" value="Download Prospectus" size="20" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 15px;margin-right: 25px; transition: transform .2s;">
                               <input type="submit" id="submit" value="Academy Tour" size="20" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 15px; transition: transform .2s;">
			</div> 
                        </div>
			
			
		</div>  
                <div style="clear:both">
                </div>
                <div class="container1">
                <div id="div1">
                      <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
                </div>
                <div id="div2"> 
                                <h1 style="color:black; text-align:centre; font-variant: small-caps;"><b> Testimonials </b></h1><hr>
				<p style="text-align:left;"> 
			I have been coming to the gym of APS Sports Academy for very long now.7 years ago, my kids used to come here for swimming classes and I've joined the gym now.I've had a wonderful experience here.Even the crowd is good and are very focussed on fitness.
                               </p>
                               <hr class="red">
                               <img src="testimonial.jpg" id="testimonial" width="50" height="50">Aniket Sharma<br><br><br><br>
                               <span class="tab"><input type="submit" id="submit" value="Show More" size="90" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 20px;width:100%;"> 
			</div> 
                        
                <div id="div3">
                      <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
                </div>
                <div style="clear:both">
                </div>
                <div id="div4">
                      <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
                </div>
                <div id="div5">
                      <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
                </div>
                </div>
                <div style="clear:both">
                </div>
                <div class="container2">
               <div style="float:left; width:600px; 
			height:600px;
			vertical-align:middle;
                        padding:20% 5% 0% 20%; color:white; font-size:22px;"> 
                                <h1 class="glow" style="color:#98FB98; font-variant: small-caps;"><b> APS Sports League </b></h1>
				<p> 
			With a keen interest to promote good health, sports and fitness APS Academy, in association with White Canvas India, organized APS's First And Biggest Sports League- APSL 2018. In this fiesta type family event, individuals-kids and adults, teams and families-participated in 12 indoor and outdoor sports of their choice and won amazing prizes.After an award-winning event last year, APS Academy is back with something more interesting and amazing.

With a time span of 27 hours, the age range of 4-71 years and a number of 3062 participants, APSL was awarded a National Record for the largest family sports league.</p><br>
                              
                              
                        <input type="submit" id="submit" value="View Website" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 20px;width:25%;transition: transform .2s;"> 
              </div>
              <div style="padding:23% 5% 30% 0%;
			float:right;">
                      <video width="400" height="300"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
                </div>
                </div>
                
</body> 
</html>					 
