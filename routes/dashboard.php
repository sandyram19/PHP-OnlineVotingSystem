<?php
session_start();
if(!isset($_SESSION['userdata'])){
  header("location: ../");
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0){
  $btnstatus="btn-danger";
  $status="Not Voted";
}
else{
  $btnstatus="btn-success";
  $status="Voted";
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
      <a href="../"><button type="button" class="contact btn btn-lg btn-dark"> <ion-icon name="arrow-back-outline"></ion-icon> Back </button></a>
        <a class="navbar-brand" href="#">Online Voting System</a>
        <a href="logout.php"><button type="button" class="contact btn btn-lg btn-dark"><ion-icon name="log-out-outline"></ion-icon> Logout </button></a>
      </nav>
      
      <!-- Title -->
      <div class="row mainSection">
        <div class="col-lg-4">
          <!-- Profile Card -->
          <div class="card text-dark bg-light mb-3" style="max-width: 18rem; border-radius: 3%; height: 500px;">
              <div class="card-header">
                  <center>
                  <img src="../uploads/<?php echo $userdata['photo'] ?>" alt="" height="200" width="200" style="border-radius: 5%;">
                  <center>
              </div>

              <div class="card-body">
                <h5 class="card-title"> <?php echo $userdata['name'] ?></h5>
                <p class="card-text"><ion-icon name="call-sharp"></ion-icon>  <?php echo $userdata['mobile'] ?><br><ion-icon name="home-outline"></ion-icon>  <?php echo $userdata['address'] ?></p>
                <center><button class="btn btn-lg <?php echo $btnstatus ?>"><?php echo $status ?></button></center>
              </div>
          </div>
        </div>

        <div class="col-lg-8">
          <!-- Group Content -->
          <div class="card border-dark mb-3" style="max-width: 60rem; height: 90%;">
            
            <div class="card-body text-dark">
              
                <?php 
                  if($_SESSION['groupsdata']){
                    for($i=0;$i<count($groupsdata);$i++){
                  ?>

                  <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <b>Candidate Name: <?php echo $groupsdata[$i]['name'] ?> </b><br>
                        <b>Votes: <?php echo $groupsdata[$i]['votes'] ?> </b><br>
                        <form action="../api/vote.php" method="POST">
                          <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']?>">
                          <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']  ?>">

                          <?php
                            if($_SESSION['userdata']['status']==0){
                              ?>
                          <button class="btn btn-lg btn-warning w-20" name="votebtn" id="votebtn" type="submit"> Vote </button>
                          
                          <?php
                          }else{
                            ?>
                            <button disabled class="btn btn-lg btn-success w-20" name="votebtn" id="votebtn" type="button"> Voted </button>
                          
                          
                          <?php } ?>
                          </form>
                    </div>
                    
                    <div class="col-lg-2 mr-5">
                        <img src="../uploads/<?php echo $groupsdata[$i]['photo'] ?>" alt="" height="100" width="100" >
                    </div>
                  </div>
                  <hr>

                  <?php
                       
                    }
                  }else{
                    echo "No Candidates so far";

                  }
                ?>
                <!-- <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </section>

 


  



  

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

         