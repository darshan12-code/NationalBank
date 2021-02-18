<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    
    <title>National Bank</title>
    
  <link rel="shortcut icon" href="images1/logo02.jpeg" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/tableContent.css?v=<?php echo time(); ?>">
  
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>
<body style="background-image: url('images1/bg.jpeg') ;">
    <?php
    include 'config.php';
    $sql="SELECT * FROM users";
    $res=mysqli_query($conn,$sql);
?>
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

  <!-- Table -->
  <div class="container">
  <h2 class="heading shadow-lg" style="background-color: rgb(247, 242, 0);"> View Users </h2>
      <br>
      <div class="row">
          <div class="col">
              <div class="table-responsive-sm">
                  <table class="table table-hover table-striped table-sm">
                      <thead class="table-dark" style="color:white;">
                        <tr>
                            <th scope="col" class="text-center py-3">Id</th>
                            <th scope="col" class="text-center py-3">Name</th>
                            <th scope="col" class="text-center py-3">E-Mail</th>
                            <th scope="col" class="text-center py-3">Balance</th>
                            <th scope="col" class="text-center py-3">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <tr style=" background-color:white; color:black;">
                            <td class="py-2"><?php echo $row['id']?></td>
                            <td class="py-2"><?php echo $row['name']?></td>
                            <td class="py-2"><?php echo $row['email']?></td>
                            <td class="py-2"><?php echo $row['balance']?></td>    
                            <td><a href="details.php?id= <?php echo $row['id'] ;?>"> <button class="btn btn-outline-primary btn " style="background-color: crimson;border-radius: 50px;" >View Detatils</button></a></td>
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
  <footer class="shadow-lg">
    <div class="follow ">
      <h3 style="color: white; font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Follow Us</h3>
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
    <p class="text-copy">
    Created By Darshan Agrawal GRIPFEB21
    </p>
  </footer>
  <!-- Footer End -->

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

    </body>
</html>