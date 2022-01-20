<?php
session_start();

include("connection.php");
include("functions.php");

//$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
    <head>    
        <title>SMART TIMETABLE</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
        <div class="main">
         <nav>                
            <div class="nav-links">
                <ul>
                    <li><a href="log in.php"> <h1>HOME</h1></a></li>
                    <li><a href="About us.php">ABOUT US</a></li>
                    <li><a href="Contact us.php">CONTACT US</a></li>
                    <li><a href="index.php">LOG OUT</a></li>
                </ul>
            </div>
         </nav>
        
        <div class="information">
            <div class="overlay"></div>
            <img src="images/clipart2188840.png" class="log">
           <div id="circle">
               <div class="feature one">
                   <img src="images/class (1).png">
                   <div> 
                     <div class="ab"><a href="HOME/home.php"> <h1> TAKE A class now</h1>
                       <p>create or manage a free class</p></a></div>
                   </div>
               </div>
               <div class="feature two">
                   <img src="images/teacher.png">
                   <div>
                    <h1>check list of teachers</h1>
                    <p>see all the list of teachers in the institute</p>
                   </div>
                  
               </div>
               <div class="feature three ">
                   <img src="images/time table.png">
                   <div>
                       <h1>Schedule a class </h1>
                       <p>assign students to take a class for later</p>
                   </div>
               </div>
               <div class="feature four">
                   <img src="images/time.png">
                   <div>
                       <h1>SUBJECTS</h1>
                       <p>check the list of subjetcts</p>
                   </div>
               </div>

           </div>
           <div class="controls">
            <img src="images/up.png" id="upbtn">
            <h3>SCROLL</h3>
             <img src="images/down.png" id="downbtn"> 
               </div>
                  </div>
                            
                            
                   <script>
                       var circle = document.getElementById("circle")
                       var upbtn = document.getElementById("upbtn")
                       var downbtn = document.getElementById("downbtn")
                            
                            
                        var rotatevalue = circle.style.transform;
                        var rotatesum;
                            
                             upbtn.onclick = function()
                                {
                                    rotatesum= rotatevalue + "rotate(-90deg)";
                                   circle.style.transform = rotatesum;
                                     rotatevalue= rotatesum;
                                               
                                               
                                 }
                               downbtn.onclick = function()
                                   {
                                   rotatesum= rotatevalue + "rotate(90deg)";
                                      circle.style.transform = rotatesum;
                                    rotatevalue= rotatesum;
                            
                                           }
                                       </script>
            








             
            



           







    </body>
</html>