<?php
session_start();

if (!isset($_SESSION['prn'])) {
  header("Location:login.php");
  exit();
}
$prn = $_SESSION['prn'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$number = $_SESSION['number'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <style>
    h1 {
      font-size: 2rem;
      margin-top: 3rem;
      margin-bottom: 1rem;
      text-align: center;
    }

    h6 {
      text-align: center;
      margin-bottom: 0.5rem;
    }

    .card {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
      width: 50%;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
    }

    .logout{
      text-align: center;
    }
    a {
      cursor: pointer;
      padding: 0.5rem 1rem;
      font-size: 1rem;
      text-align: center;
      text-decoration: none;
      color: white;
      background-color: #f43535;
      border: none;
      border-radius: 5px;
    }
    a:hover{
      background-color: #d11e1e;
    }
  </style>
</head>

<body style="background-color: #f2f1f1;">
  <h1>My Profile</h1>
  <h6>Welcome
    <?php echo $name ?>&#128075;
  </h6>
  <div class="col-md-8" style="width: 100%;">
    <div class="card mb-3" style="width: 50%;
    margin-left: 25%;">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Full Name</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $name ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">PRN</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $prn ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Email</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $email ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Mobile No.</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?php echo $number ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="logout">
  <a href="logout.php">logout</a>
  </div>
</body>


</html>