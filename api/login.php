<?php
session_start();
include('connect.php');
$ph = $_POST['phone'];
$pass=$_POST['pass'];
$role=$_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM USER WHERE mobile='$ph' AND password='$pass' AND role='$role'");

if(mysqli_num_rows($check)>0){
    $userdata = mysqli_fetch_array($check);
    $groups=mysqli_query($connect,'SELECT * FROM USER WHERE role=2');
    $groupsdata=mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groupsdata;

    echo '
    <script>
        window.location="../routes/dashboard.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Invalid Credentials!");
        window.location="../";
    </script>
    ';
}

?>