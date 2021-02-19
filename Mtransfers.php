<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amt = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // To check input of negative value by user
    if (($amt)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Negative Vaules are unable to transfered")';  
        echo '</script>';
    }


  
    // To check insufficient balance.
    else if($amt > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  
        echo '</script>';
    }
    


    //  To check zero values
    else if($amt == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero Value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducts money amount from the Sender's Account
                $newbalance = $sql1['balance'] - $amt;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adds money amount to Reciever's Account
                $newbalance = $sql2['balance'] + $amt;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sen = $sql1['name'];
                $rec = $sql2['name'];
                $sql = "INSERT INTO moneytransfer(`sname`, `rname`, `balance`) VALUES ('$sen','$rec','$amt')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful Happened');
                               window.location='transHistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amt =0;
        }
    
}
?>
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

  <!-- Table -->
  <div class="container" >
  <h2 class="heading shadow-lg" style="background-color: rgb(247, 242, 0);">Transfer Money</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $res=mysqli_query($conn,$sql);
                if(!$res)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $row=mysqli_fetch_assoc($res);
            ?>
            <form method="post" name="tcredit" class="tabletext "  ><br>
        <div style="align-items:center">
            <table  class="table table-hover table-striped table-sm">
                <tr class="table-dark" style="color:white; font-size:21px">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr style=" background-color:white; color:black; font-size:20px">
                    <td class="py-2"><?php echo $row['id'] ?></td>
                    <td class="py-2"><?php echo $row['name'] ?></td>
                    <td class="py-2"><?php echo $row['email'] ?></td>
                    <td class="py-2"><?php echo $row['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label style="color : black;"><b>Transfer To </b></label>
        <select name="to" class="form-control" required style="width:300px">
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $res=mysqli_query($conn,$sql);
                if(!$res)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($row = mysqli_fetch_assoc($res)) {
            ?>
                <option class="table" value="<?php echo $row['id'];?>" >
                
                    <?php echo $row['name'] ;?> (Balance: 
                    <?php echo $row['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color : black; "><b>Amount </b></label>
            <input type="number" class="form-control" name="amount" required style="width:300px">   
            <br><br>
                <div>
                <button class="btn btn-outline-dark mt-3 shadow" name="submit" type="submit" id="myBtn"  style="background-color: crimson;border-radius: 50px; " >Transfer</button>
            </div>
        </form>
    </div>
<!-- End Table -->


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
