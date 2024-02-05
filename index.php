<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Retrieve form data
  $prn = $_POST['prn'];
  $password = $_POST['password'];
  
  // Connect to database
  $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "noteshub";
  
  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Check if user exists and password is correct
  $sql = "SELECT * FROM user WHERE prn='$prn' AND password='$password'";
  $result = $conn->query($sql);
  
  if ($result->num_rows == 1) {
    // Set session variables
    $row = $result->fetch_assoc();
    $_SESSION["prn"] = $row['prn'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['number'] = $row['number'];
    // Redirect to home page or dashboard
    header("Location: index.html");
    exit();
  } else {
    // Display error message
    echo "<script>alert('Invalid username or password!')</script>";
  }
  
  // Close database connection
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images\logo.jpeg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p>If you had already registered then login here to explore NotesHub.</p>
                        <form action="index.php" method="post">
                            <input type="text" class="text" name="prn" placeholder="Enter Your PRN" required>
                            <input style="margin-bottom: 15px;" type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            <button name="submit" name="submit" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>