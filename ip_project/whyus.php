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
			 
                } 
                
/* Slideshow container */
.slideshow-container {
    max-height: 100%;
    max-width: 100%;
    position: relative;
    /* margin: auto; */
    /* margin: 0px; padding: 0px; border: 0px; margin: none; */
  }
  
  /* Next & previous buttons */
  .prev, .next {
    color: white;
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    /* margin-top: -22px; */
    
    /* font-weight: bold; */
    /* font-size: 18px;
    transition: 0.6s ease;
    border-radius: 500px; */
    /* border-radius: 0 3px 3px 0; */
    /* user-select: none; */
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    /* border-radius: 3px 0 0 3px; */
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    /* background-color: rgba(0,0,0,0.8); */
    
    color: red;
  }
  
  
  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
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
                        width: 160px;
                        height: 50px;
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
			} 
		</style> 
	</head> 
	
	<body> 
		<div class="container"> 
			<div id="st-box"> 
                        <div class="effect2">
            <div class="slideshow-container">
          
              <div class="mySlides fade">
              
              <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
               
               
              </div>
              
              <div class="mySlides fade">
                 
              <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
              </div>
              
              <div class="mySlides fade">
              
              <video width="350" height="250"  controls>
                      <source src="APS Academy.mp4" type="video/mp4">
                      </video>
               
              </div>
             
          
              
          
              
              <a class="prev" onclick="plusSlides(-1)">&#10094;&#10094;&#10094;</a>
              
              <a class="next" onclick="plusSlides(1)">&#10095;&#10095;&#10095;</a>
          
              </div>
            </div>
			</div> 
			
			<div id="nd-box"> 
                                <h1 style="color:white; font-variant: small-caps;"><b> Why Us </b></h1>
				<p> 
			APS Academy- an integral part of APS School was founded in 2009 and in a short span has already established itself as a prime sports institution in sports area. It has earned a high reputation and utmost popularity for being the best equipped sports academy that offers international 
                               facilities in the most congenial atmosphere. Once you enter the sports academy you will experience the latest in group fitness programming and innovating 
                               fitness equipment and genuine support of our certified staff that will help you.
                               </p> 
                               <div style="left:10%;">
                               <input type="submit" id="submit" value="Read More" size="20" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 15px;margin-right: 25px">
                               <input type="submit" id="submit" value="Download Prospectus" size="20" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 15px;margin-right: 25px">
                               <input type="submit" id="submit" value="Academy Tour" size="20" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 15px;">
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
                                <h1 style="color:black; text-align:centre; font-variant: small-caps;"><b> Testimonials </b></h1>
				<p style="text-align:left;"> 
			I have been coming to the gym of APS Sports Academy for very long now.7 years ago, my kids used to come here for swimming classes and I've joined the gym now.I've had a wonderful experience here.Even the crowd is good and are very focussed on fitness.
                               </p>
                               <hr>
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
                        padding:20% 5% 0% 20%; color:white; font-size:20px;"> 
                                <h1 style="font-variant: small-caps;"><b> APS Sports League </b></h1>
				<p> 
			With a keen interest to promote good health, sports and fitness APS Academy, in association with White Canvas India, organized APS's First And Biggest Sports League- APSL 2018. In this fiesta type family event, individuals-kids and adults, teams and families-participated in 12 indoor and outdoor sports of their choice and won amazing prizes. After an award-winning event last year, APS Academy is back with something more interesting and amazing.

With a time span of 27 hours, the age range of 4-71 years and a number of 3062 participants, APSL was awarded a National Record for the largest family sports league.
                               </p><br><br> 
                        <input type="submit" id="submit" value="View Website" style="border-radius:20px; background-color:rgb(255, 0, 0); color: white; cursor: pointer; font-size: 20px;width:25%;"> 
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
