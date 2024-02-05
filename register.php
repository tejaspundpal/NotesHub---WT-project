<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Retrieve form data
	$name = $_POST['name'];
	$prn = $_POST['prn'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
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
	
	// Check if user already exists
	$sql = "SELECT * FROM user WHERE prn='$prn'";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0) {
		echo "PRN already exists!";
		exit();
	}
	
	// Insert user into database
	$sql = "INSERT INTO user (name,prn,number, email,password,cpassword) VALUES ('$name', '$prn', '$number' , '$email', '$password', '$cpassword')";
	
	if ($conn->query($sql) === TRUE) {
	  // echo "User registered successfully!";
      echo "<script>alert('User registered successfully!')</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	// Close database connection
	$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
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
                        <h2>Register Now</h2>
                        <p>If you have not an account,Fill the details and Register here.</p>
                        
                        <form action="register.php" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Your Name"  required>
                            <input type="text" class="prn" name="prn" placeholder="Enter Your PRN" required>
                            <input type="text" class="number" name="number" placeholder="Enter Your Mobile number" required>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <input type="password" class="confirm-password" name="cpassword" placeholder="Confirm Your Password" required>
                            <button name="submit" class="btn" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="index.php">Login</a>.</p>
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