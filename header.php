<div class="container-fluid sticky-top bg-white shadow-sm mb-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="frontpage.php" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><img src="img/doc_logo.png" alt="Logo" style="width: 80px; margin-right: 10px;"></i>Schedulix Physician</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <li class="nav-item <?= ($activePage == 'frontpage') ? 'active':''; ?>">
            <a href="frontpage.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item <?= ($activePage == 'service') ? 'active':''; ?>">
            <a href="service.php" class="nav-link">Services</a>
        </li>
        <li class="nav-item <?= ($activePage == 'notification') ? 'active':''; ?>">
            <a href="notification.php" class="nav-link">Booking Status</a>
        </li>
        <li class="nav-item <?= ($activePage == 'complaints') ? 'active':''; ?>">
            <a href="complaints.php" class="nav-link">Complaints</a>
        </li>
        <li class="nav-item <?= ($activePage == 'emergency') ? 'active':''; ?>">
            <a href="emergency.php" class="nav-link">Emergency</a>
        </li>
        <li class="nav-item">
            <a href="about.html" class="nav-link">Logout</a>
        </li>
    </div>
</div>

        </nav>
    </div>
</div>


  <style>
    .nav-item.active{
        font-weight: 700;
        /* padding: 30px 0; */
    } 
    :root {
    --primary: #2a5af8ab; /* Primary hover color */
    --secondary: #354F8E;
    --light: #EFF5F9;
    --dark: #1D2A4D;
}
 
  </style>