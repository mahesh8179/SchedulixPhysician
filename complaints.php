<?php
session_start(); 
$activePage = basename($_SERVER['PHP_SELF'], '.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <title>SCHEDULIX PHYSICIAN - HoME CARE SERVICES</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <!-- <link rel="stylesheet" href="navstyle.css"> -->
  <title>SchedulixPhysician</title>
  <style>
        body {
            overflow-x: hidden;
            /* overflow-y: hidden; */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background-image: url('https://cdn.pixabay.com/photo/2022/02/02/23/26/doctor-6989582_1280.jpg') !important;
            background-size: cover !important;
                     width:100%; 
                     background-position: top;
                     background-attachment: fixed;

            height:870px;
            /* background-blend-mode: overlay; */
        }
        
        header {
            /* background-color:#97dcd3; */
            color: white;
            padding: 1px;
            text-align: center;
        }

        .hamburger {
            font-size: 20px;
            cursor: pointer;
        }

        .menu-bar {
            display: flex;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
        }

        .menu-items {
            display: none;
            position: absolute;
            background-color: black;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 10px;
            left: 0;
            top: 40px;
            cursor: pointer;
        }

        .show-menu {
            display: block !important;
        }

        nav {
            background-color:#2a5af8ab;
            color: white;
            padding: 10px;
            text-align: center;
        }
        
        ul {
            list-style: none;
            padding: 0;
        }
        
        li {
            display: inline;
            margin-right: 20px;

        }
        
        a {
            text-decoration: none;
            color: black;
            
        }
        
        main {
            padding: 20px;
        }
        
        section {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #a8f3e9;
            background-color: white;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            text-align: center;
            color: black;
        }

        h2 {
            margin-top: -60px;
        }

        /* Style for the dropdown menu */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown button */
        .dropbtn {
            text-decoration: none;
            color: black;
            margin-right: 20px;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #3333; /* Background color for dropdown */
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Style for dropdown links */
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #444;
        }

        /* Display the dropdown content when hovering over the dropdown */
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .img{
            padding-left: 68rem;
        
        }
     .service{
        height: 70px;
         width: 400px;
        background-color: #2a5af8ab;
        border-radius: 100px;
     }


     form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 18px 15px;
  font-size: 12px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #2a5af8ab;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color:#2a5af8ab;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  width: 300px;
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: #2a5af8ab;
    cursor: pointer;
    font-size: 21px;
}
.input-box.button input:hover{
  background: #97dcd3;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color:#2a5af8ab;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
    
.box{
  width:300px;
}
  form{
    height: 200px;
  }
  textarea{
    height: 100%;
  width: 100%;
  outline: none;
  padding: 18px 15px;
  font-size: 12px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #2a5af8ab;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
    
  }


  @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

*{
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body{
    background: #f5f6fa;
}

.wrapper .sidebar{
    /* background:black; */
    position: fixed;
    top: 0;
    left: 0;
    width: 225px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
}
.wrapper .sidebar ul li a{
    display: block;
    padding: 13px 30px;
    border-bottom: 1px solid black;
    color: black;
    font-size: 16px;
    position: relative;
}

.wrapper .sidebar ul li a .icon{
    color: #2a5af8ab;
    width: 30px;
    display: inline-block;
}
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: black;

    background:white;
    border-right: 2px solid rgb(5, 68, 104);
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: #0c7db1;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: block;
}
.wrapper .section{
    width: calc(100% - 225px);
    margin-left: 225px;
    transition: all 0.5s ease;
}

.wrapper .section .top_navbar{
    /* background:#97dcd3; */
    height: 33px;
    display: flex;
    align-items: center;
    padding: 0 30px;

}

.wrapper .section .top_navbar .hamburger a{
    font-size: 28px;
    color: black;
}

.wrapper .section .top_navbar .hamburger a:hover{
    color: black;
}
body.active .wrapper .sidebar{
    left: -225px;
}

body.active .wrapper .section{
    margin-left: 0;
    width: 100%;
}
.hamburger {
    margin-bottom: -92px;
    font-size: 20px;
    cursor: pointer;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
.alert_box,
.show_button{
  position: absolute;
  top: 50%;
  left: 51%;
  transform: translate(-50% , -50%);
}
.show_button{
  margin-top: 27em;
  height: 55px;
  padding: 0 30px;
  font-size: 20px;
  font-weight: 400;
  cursor: pointer;
  outline: none;
  border: none;
  color: #fff;
  line-height: 55px;
  background: #2a5af8ab;
  border-radius: 5px;
  transition: all 0.3s ease;
  margin-left:-468px;
}
.show_button:hover{
  background: #2a5af8ab;
}
.background{
  position: bottom;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.5);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.alert_box{
  padding: 30px;
  display: flex;
  background: #fff;
  flex-direction: column;
  align-items: bottom;
  text-align: center;
  max-width: 450px;
  width: 100%;
  border-radius: 5px;
  z-index: 5;
  opacity: 0;
  pointer-events: none;
  transform: translate(-50% , -50%) scale(0.97);
  transition: all 0.3s ease;
}
#check:checked ~ .alert_box{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50% , -50%) scale(1);
}
#check:checked ~ .background{
  opacity: 1;
  pointer-events: auto;
}
#check{
  display: none;
}
.alert_box .icon{
  height: 100px;
  width: 100px;
  color:#2a5af8ab;
  border: 3px solid #2a5af8ab;
  border-radius: 50%;
  line-height: 97px;
  font-size: 50px;
}
.alert_box header{
  font-size: 35px;
  font-weight: 500;
  margin: 10px 0;
}

.navbar-light .navbar-nav .nav-link{
  margin-left:0px;
}
.alert_box p{
  font-size: 20px;
}
.alert_box .btns{
  margin-top: 20px;
}
.btns label{
  display: inline-flex;
  height: 55px;
  padding: 0 30px;
  font-size: 20px;
  font-weight: 400;
  cursor: pointer;
  line-height: 55px;
  outline: none;
  margin: 0 10px;
  border: none;
  color: #2a5af8ab;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.btns label:first-child{
  background: #2a5af8ab;
}
.btns label:first-child:hover{
  background: hidden;
}
.btns label:last-child{
  color:white;
  background: #2a5af8ab;
}
.btns label:last-child:hover{
  background: hidden;
}
.issue{
  text-align: left;
    font-size: 14px;
    margin-top: -15px;
}



    </style>
</head>
<body> 
<!-- style="background-image: url(img/hdc-4.jpg); background-size: cover; width:100%; height:870px;"></body> -->
   
    
      
    <!-- Navbar Start -->
    <?php include ('header.php'); ?>

  <!-- Navbar End -->
    


    <div id="btnContainer">


                </div>
                   
                    
                        <main style="width: 500px; margin-left: -80px; margin-top: 60px;">
                            <!-- <section id="landscaping"> --><left>
                              
                              <!-- </section> --></left>
                              <center> 
                                <h2><b style="margin-left:-2px;font-size:18px; margin-top: 60px; color:blueviolet;">COMPLAINTS</b></h2>
                                <BR> 
                              <div class="box">
                                <form action="complaintdeveloper.php" method="POST">
                                    <div class="input-box">
                                    
                                      <input type="text"  name="Patient" placeholder="PATIENT NAME : " required>
                                    </div>
                                    <BR>
                                    <div class="input-box">
                                      
                                      <input type="text" name="Selected" placeholder="SELECTED CARE SERVICE : " required>
                                      
                                    </div><br>
                                    <div class="input-box">
                                      
                                      <input type="email" name="Email" placeholder="EMAIL : " required>
                                    </div><br>
                                    <div class="input-box">
                                  
                                      <input type="text" name="Contact" placeholder="CONTACT NUMBER : " required>
                                    </div><br>
                                    <div class="input-box">
                                  
                        
                                    
                                      <input type="text" name="address" placeholder="ADDRESS : " >
                                    </div><br>
                                    <div class="input-box">
                                        
                                      <input type="text" name="types" placeholder="ISSUE TYPE : " required>
                                    </div><br>
                                    <div class="input-box">
                                        <h2  class="issue"><li><a href="landscaping.html">ISSUE : </a></li></h2>
                        
                                        <textarea type="text" name="issue" placeholder="Type here.. : "  cols="43" rows="5"></textarea>
                                    </div><br>
                                    
                                   
                                    <div class="container"> 
                                        <input type="submit" class="show_button" value="Submit" >
                                        <!-- <label class="show_button" for="check">Submit</label> -->
                                        <div class="background"></div>
                                        <!-- <div class="alert_box"> -->
                                          <!-- <div class="icon"> -->
                                            <!-- <i class="fas fa-exclamation"></i> -->
                                          <!-- </div> -->
                                          <!-- <header>Successfully</header>
                                          <p>Complaint Sent</p>
                                          <div class="btns">
                                          <a href="complaintdeveloper.php"><label for="check">ok</label></a>
                                            <label for="check">Cancel</label>
                                          </div> -->
                                        </div>
                                      </div>
                                  </form>
                                </div>
                                    </center>         
                                  </main>
        </div> 
        <script>
          var hamburger = document.querySelector(".hamburger");
             hamburger.addEventListener("click", function(){
                 document.querySelector("body").classList.toggle("active");
             })
           </script>
</body>
</html>






