<?php

session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

	  $servername = "localhost";
    $db_email = "root";
    $db_password = "";
    //change DB name 
    $dbname = "nurturecare"; 
	
	
// Create connection
$conn = new mysqli($servername, $db_email, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	  
	 $sql = "SELECT * from asignup where email = '$email' AND password = '$password'";  
	 


// Execute the query
$result = $conn->query($sql);

// Check if a user with the given credentials exists
if ($result->num_rows == 1) {

    // User is authenticated, set session variable to indicate login
    $_SESSION["logged_in"] = true;
    $userInfo = $result->fetch_assoc();
    $_SESSION['user_id'] = $userInfo['id'];
    
    // Redirect to a protected page (e.g., yellow.html)
    header("Location: Ahome.php");
    exit();
} else {
    // Invalid credentials, show an error message
    echo "Invalid username or password.";
}
exit();
// Close the database connection
$conn->close();
}
?>