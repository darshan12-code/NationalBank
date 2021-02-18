<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images1/logo02.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  
    <title>National Bank</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
    </style>
</head>

  <body  style="background-image: url('images1/bg.jpeg') ;">
    <!--Nav Bar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient  sticky-top" >
      <div class="container-fluid">
        <a class="navbar-brand shadow-lg" href="./index.html">
          <img  src="images1/logo02.jpeg" alt="logo " style="width:40px;">
          National Bank
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html" style="font-size:larger;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html" style="font-size:larger;">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html" style="font-size:larger;">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.html" style="font-size:larger;">Contact Us</a>
            </li>
           </ul>
        </div>
      </div>
    </nav>

<!-- End NavrBar -->  
<h2 class="heading shadow-lg" style="background-color: rgb(247, 242, 0);">View User Details</h2>
<?php 
include("config.php"); 
?>
<div class="container my-4">
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $get_cust = "select * from users where id='$id'";
        $run_cust = mysqli_query($conn, $get_cust);
        
      while ($row_cust = mysqli_fetch_array($run_cust)) {
          $cust_id = $row_cust['id'];
          $cust_name = $row_cust['name'];
          $cust_email = $row_cust['email'];
          $current_bal = $row_cust['balance'];
          
          echo "
          <br>
          <br>
                       <table class='table table-bordered' style='text-align: center; font-size: 18px;background-color:white; color:black;'>
                       <tr>
                       <th scope='col'>Customer ID</th>
                       <td>$cust_id</td>
                       </tr>
                       <tr>
                       <th scope='col'>Customer Name</th>
                       <td>$cust_name</td>
                       </tr>
                       <tr>
                       <th scope='col'>Customer Email</th>
                       <td>$cust_email</td>
                       </tr>
                       <tr>
                       <th scope='col'>Current Balance</th>
                       <td>$current_bal</td>
                       </tr>
                       </table>
                       </div>
                       
                       
                       <div class='row'>
                       <div class='col-sm-3'></div>
                       <div class='col-12 col-sm-3'>
                              
                       
                        <a href='allUsers.php' style='background-color: crimson;border-radius: 50px;' class='btn btn-outline-primary mt-3 shadow'>Back to all users</a>
                        
                        
                        </div>
                        
                        <div class='col-12 col-sm-3 '>
                               
                        
                        
                        
                        </div>
                        <div class='col-sm-3'></div>
                        </div>
                    ";
                }
            }
    ?>
</div>

  <!-- Footer -->
  
  <footer class="shadow-lg" >
    <div class="follow">
      <h3 style="color: rgb(252, 252, 252); font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Follow Us On</h3>
      <div class="social">
        <a href="#instagram" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="#twitter" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#linkedin" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="#facebook" class="facebook">
        <i class="fa fa-facebook"></i>
        </a>
      </div>
    </div>
    <p class="text-copy"  >
    Created By Darshan Agrawal GRIPFEB21
    </p>
  </footer>
  
  <!-- Footer End -->

    
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
    <!--
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
    </body>
</html>

