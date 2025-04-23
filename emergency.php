<?php
session_start(); 
$activePage = basename($_SERVER['PHP_SELF'], '.php');

?>
<!DOCTYPE html>
<html>
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
   * {
      box-sizing: border-box;
   }
   .navbar-light .navbar-nav .nav-link{
  margin-left:0px;
}
   .right-image{
    width: 655px;
    height: 510px;
    /* margin-left: 598px; */
    margin-top: -30px;
    float:right;
}
   body {
      overflow-x: hidden;
      overflow-y: hidden;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   }
   /* Create two equal columns that floats next to each other */
   .column {
      float: left;
      width: 113%;
      height: 100%;
      padding: 10px;
      margin-right: 10px;
      color: black;
   }
   /* Clear floats after the columns */
   .row:after {
      content: "";
      display: table;
      clear: both;
   }
   /* Style the buttons */
   .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: #f1f1f1;
      cursor: pointer;
   }
   
   .btn:hover {
      background-color: #ddd;
   }
   .btn.active {
      background-color: #666;
      color: white;
   }
   header {
            /* background-color:#97dcd3; */
            color: white;
            padding: 10px;
            text-align: center;
        }
        element.style {
    margin-left: 335px;
}
.form .button input{
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 50px;
    background-color: #a8f3e9;
    cursor: pointer;
    transition: all 0.3s ease;
}
div.column {
    outline-color: #2a5af8ab;
    background-color: #2a5af8ab;
    width: 100em;
    margin-left: -10px;
    padding-left: 265px;
}
span.name{
   margin-left: 164px;
   color: black;
}
span.tname{
   margin-left: 101px;
   color: black;
}
span.exp{
   margin-left: 157px;
   color: black;
}
span.staff{
   margin-left: 174px;
   color: black;
}
span.contact{
   margin-left: 104px;
   color: black;
}
span.address{
   margin-left: 150px;
   color: black;
}

h2{
   text-align: start;
   font-size: 16px;
   color: white;
}
body {
            overflow-x: hidden;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
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
            background-color:#13C5DD;
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
            padding: 2px 20px 20px;
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
            margin-top: 0;
            margin-left: -245px;
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
        background-color: #97dcd3;
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
  border: 1.5px solid #97dcd3;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color:#97dcd3;
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
    background: #97dcd3;
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
  color:#97dcd3;
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
  border: 1.5px solid #97dcd3;
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
    color: #dee4ec;
    width: 30px;
    display: inline-block;
}
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color:black;

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
    color: black
}

.wrapper .section .top_navbar .hamburger a:hover{
    color: black
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
p {
    margin-top: -31px;
    margin-bottom: 1rem;
}

    </style>
</head>
<body>
   
    
       <!-- Navbar Start -->
       <?php include ('header.php'); ?>

    <!-- Navbar End -->
    <img src="img/doct img 4.jpg" class="right-image"/> 
        
    <!-- <h1 style="text-align:center;font-size: 18px;     padding-left: 138px;    margin-left: -366px;">EMERGENCY</h1> -->
<script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
</div>
</header>
</div>
<main>  <!-- <section id="landscaping"> --><left>       
       <!-- </section> --></left>
            
        <div class="row det mb-3">
        <div class="column" style="margin-top:-35px;">
     
        <h2>Name <span class="name">:  DR.ABHIMANYU</span></h2>
        <h2>Treatment name<span class="tname">: CRITICAL CARE</span></h2>
        <h2>Idno <span class="staff">: B0031</span> </h2>
        <h2>Contact number<span class="contact">: 099408 67945</span> </h2>
        <h2>Gender <span class="exp">: Male</span></h2>
        <h2>Address <span class="address">: 26 Kamarajar Street, Tambaram, Tamil Nadu 600061 · ~2.4 km</span></h2>
        

        </div>
        </div>

        </div>
        <BR>
        <div class="row det">
            <div class="column" >
            
            <h2 style="margin-left: -245px;" >Name <span class="name">: DR.MAHIR </span></h2>
            <h2 style="margin-left: -245px;">Treatment name<span class="tname">: CHRONIC DISEASES</span></h2>
            <h2 style="margin-left: -245px;">Idno <span class="staff">:  D4390</span> </h2>
            <h2 style="margin-left: -245px;">Contact number<span class="contact">: 1860 500 8585</span> </h2>
            <h2 style="margin-left: -245px;">Gender <span class="exp">: Male</span></h2>
            <h2 style="margin-left: -245px;">Address <span class="address">: No.7, 46, 4th St, Ask Nagar, Adambakkam, Chennai, Tamil Nadu · ~2.8 km</span></h2>
            
    
            </div>
            </div>
    
            </div><br><br>
            
            


<p style="word-spacing: 2px;width: 499px;margin-left: 46px; margin: top -60px;">Please contact the above Mentioned staff for Emergency purpose</p>
<i class="uil uil-eye-slash showHidePw"></i>
</div>


<div class="input-field button">
   <!-- <input type="submit" value=""> -->

</div>
   <!-- <button class="btn" onclick="listView()">Book the service</button> -->
<script>
   var elements = document.querySelectorAll(".column");
   function listView() {
      Array.from(elements).forEach(item => {
         item.style.width = "100%";
      });
      Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
         if (index === 0) item.classList.add("active");
         else item.classList.remove("active");
      });
   }
   function gridView() {
      Array.from(elements).forEach(item => {
         item.style.width = "50%";
      });
      Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
         if (index === 1) item.classList.add("active");
         else item.classList.remove("active");
      });
   }
</script>

 
</body>
</html>