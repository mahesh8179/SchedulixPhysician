<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
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

    <style>
        /* Page layout for footer fixed at bottom */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: 'Roboto', sans-serif;
            color: #848E9F;
        }

        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Send the video behind other content */
        }

        .content {
            flex: 1; /* Pushes footer to the bottom */
        }

        footer {
            background-color: #2a5af8ab;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative; /* Ensure it's within the page flow */
            width: 100%;
        }

        .hero-content {
            position: relative;
            z-index: 1; /* Make sure the hero content appears over the video */
            color: white;
        }
    </style>
</head>
<body>
    <!-- Background Video -->
    <video class="background-video" autoplay muted loop>
        <source src="img/21936-322869299.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Navbar Start -->
    <?php $activePage = basename($_SERVER['PHP_SELF'], '.php'); ?>
    <?php include ('header.php'); ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5" style="margin-top: -47px;">
        <div class="container py-5">
            <div class="row justify-content-start hero-content">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Schedulix Physician</h5>
                    <h1 class="display-1 mb-md-4" style="color: #8bda7a;">We Will Assure You A Healthy Proper Care</h1>
                    <div class="pt-2">
                        <a href="service.php" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2" style="color: blueviolet;">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

  

    <script>
        // Dynamic Year
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
