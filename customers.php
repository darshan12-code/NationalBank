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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="css/tableContent.css?v=<?php echo time(); ?>">
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

<?php
    include 'config.php';
    $sql="SELECT * FROM users";
    $res=mysqli_query($conn,$sql);
?>
<!-- Table -->
<div class="container">
 
  <h2 class="heading shadow-lg" style="background-color: rgb(247, 242, 0);"> Money Transfer </h2>
      
      <br>
      <div class="row">
          <div class="col">
              <div class="table-responsive-sm">
                  <table class="table table-hover table-striped table-sm">
                      <thead class="table-dark" style="color:white; font-size:20px">
                        <tr>
                            <th scope="col" class="text-center py-3">Customer Id</th>
                            <th scope="col" class="text-center py-3">Customer Name</th>
                            <th scope="col" class="text-center py-3">Customer E-Mail</th>
                            <th scope="col" class="text-center py-3">Customer Balance</th>
                            <th scope="col" class="text-center py-3">Customer Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <tr style=" background-color:white; color:black;font-size:20px">
                            <td class="text-center py-2"><?php echo $row['id']?></td>
                            <td class="text-center py-2"><?php echo $row['name']?></td>
                            <td class="text-center py-2"><?php echo $row['email']?></td>
                            <td class="text-center py-2"><?php echo $row['balance']?></td>    
                            <td ><a href="Mtransfers.php?id= <?php echo $row['id'] ;?>" class="text-center"> <button class="btn btn-outline-primary btn " style="background-color: crimson;border-radius: 50px; " >Money Tranfer</button></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
              </div>
          </div>
      </div>
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