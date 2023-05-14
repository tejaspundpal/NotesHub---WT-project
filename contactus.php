<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //connecting to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "noteshub";

  $conn = mysqli_connect($servername, $username, $password, $database);

  //die if connection is not successful
  if (!$conn) {
    die("Sorry we failed to connect: <br>" . mysqli_connect_error());
  }
  // else {
  //     echo "Connection was successful<br>";
  // }

  $sql = "INSERT INTO contactus ( name, email, message) VALUES ('$name', '$email', '$message')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.html");
    echo "<script>alert('Form submitted successfully.')</script>";
  exit();
  } 
  else {
    echo "<script>alert('Details are not submitted due to some technical problem!')</script>";
  }
}
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>