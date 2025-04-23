<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta charset="utf-8">
    <title>SCHEDULIX PHYSICIAN - HOME CARE SERVICES</title>
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
   img, svg {
    width: 655px;
    /* height: 510px; */
    /* margin-left: 598px; */
    margin-top: -43px;
    float:right;
}
   body {
      overflow-x: hidden;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
   }
   /* Create two equal columns that floats next to each other */
   .column {
      float: left;
      width: 113%;
      height: 50%;
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
div.column{
    background-color:#4B70F5;
   /* outline-style: solid; */
   outline-color: #4B70F5
   background-image: linear-gradient(to top, rgba(255,0,0,0),  #4B70F5 190%);
   width: 100em;
   margin-left: -399px;
    padding-left: 450px;
    height: 262px;
}
span.name{
   margin-left: 157px;
   color: black;
}
span.tname{
   margin-left: 94px;
   color: black;
}
span.exp{
   margin-left: 124px;
   color: black;
}
span.staff{
   margin-left: 148px;
   color: black;
}
span.contact{
   margin-left: 97px;
   color: black;
}
span.address{
   margin-left: 142px;
   color: black;
}
span.fees{
   margin-left: 164px;
   color: black;
}

h2{
   text-align: start;
   color: white;
   font-size:16px;
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
            background-color:#97dcd3;
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
            margin-top: 0;
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
        background-color: #4B70F5;
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
  border: 1.5px solid #4B70F5;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color:#4B70F5 ;
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
    background: #4B70F5 ;
    cursor: pointer;
    font-size: 21px;
}
.input-box.button input:hover{
  background: #4B70F5 ;
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
  border: 1.5px solid #4B70F5 ;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
    
  }
  .card-scroll{
    overflow-y: auto;
    overflow-x: hidden;
    height: 467px;
    margin-right: 10px;
}   
.navbar img{
        width: 80px;
    margin-right: -34px !important;
    position: relative;
    /* left: 0%; */
    float: left;
    top: 30px;
    right: 10%;
    } 
</style>
</head>

<body>
 <!-- Navbar Start -->
 <?php include ('header.php'); ?>

        <!-- Navbar End -->
  <script>
 var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
  </script>
    
    <h1 style="text-align: center; font-size: 18px; color: blueviolet; padding-left: 121px; margin-left: -813px; margin-top: -34px;">Choose The Service</h1>

 </div>
 
 <img src="img/hdc-1.jpg"/> 
 <center class="card-scroll">

 <?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'nurturecare';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['category'])){
            $service = $_GET['category'];
            $_SESSION['category'] = $service;
            
        // Query to select all images from the table
        $sql = "SELECT * FROM developers where specification='$service'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
                $name = $row['name'];
                $specification = $row['specification'];
                $idno = $row['idno'];
                $contact = $row['contact'];
                $address = $row['address'];
                $experience = $row['experience'];
                $fees = $row['fees'];
                $_SESSION['fees'] = $fees;

                // Generate the HTML for each image with Bootstrap card styling


                
              
                echo '<div class="row det" style="width:991px";"backgroundcolor:#4B70F5 ">';
               echo '<div class="column" >';
            //    echo '<img src="d1.png" width="50" height="50">';
               echo '<h2>Name <span class="name">: '. $name .'</span></h2>';
               echo '<h2>Experience <span class="exp">: '. $experience .'</span></h2>';
               echo '<h2>Treatment name<span class="tname">: '.$specification.'</span></h2>';
               echo '<h2>Staff id <span class="staff">: '.$idno.'</span> </h2>';
               echo '<h2>Contact number<span class="contact">: '.$contact.'</span> </h2>';
               echo '<h2>Address <span class="address">: '.$address.'</span></h2>';
               echo '<h2>Fees <span class="fees">: '.$fees.'</span></h2>';
              echo ' <a href="userpro.php?id='.$idno.'&tname='.$specification.'"> <button class="btn" onclick="listView()">Book the service</button></a>';

               echo '</div>';
               echo '</div>';

               echo '</div><br><br>';
               
            }
        } else {
            echo 'No images found in the table.';
        }
      }
        $conn->close();
        ?>
     
 </center> 
<i class="uil uil-eye-slash showHidePw"></i>
</div>


<!-- <div class="input-field button"> -->
   <!-- <input type="submit" value="Login"> -->

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