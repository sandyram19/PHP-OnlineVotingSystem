<?php
session_start();
if(!isset($_SESSION['userdata'])){
  header("location: ../");
}
?>

<html>

<head>
  <meta charset="utf-8">
  <title>OVS Dashboard</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico?">
  
  <!-- font-awesome src -->
  <script src="https://kit.fontawesome.com/896a88470c.js" crossorigin="anonymous"></script>
  
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- bootstrap js  -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- googleFonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="dashboard.css">
</head>

<body>

  <section id="title">
  <div class="container-fluid">

    

    <!-- Nav Bar -->
    <nav class="navbar navbar-dark">
    <button type="button" class="contact btn btn-lg btn-dark"><ion-icon name="arrow-back-outline"></ion-icon> Back</button>
    <a class="navbar-brand" href="#">Online Voting System</a>
    <button type="button" class="contact btn btn-lg btn-dark"><ion-icon name="log-out-outline"></ion-icon> Logout</button>
    </nav>
      
  




    <!-- Title -->

    <div class="row">
      <div class="col-lg-6">
        <h1 id="title">The right to vote is the gift of democracy</h1>
      </div>
   
      <div class="col-lg-6">
        <img id="img1" src="../dashboard.webp" alt="sample img">
      </div>
    </div>
   

    </div>
  </div>

  </section>

 


  



  

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>