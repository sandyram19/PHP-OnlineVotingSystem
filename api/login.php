<?php
session_start();
include('connect.php');
$ph = $_POST['phone'];
$pass=$_POST['pass'];
$role=$_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM USER WHERE MOBILE='$ph' AND password='$pass' AND role='$role'");

if(mysqli_num_rows($check)>0){
    $userdata = mysqli_fetch_array($check);
    $groups=mysqli_query($connect,"SELECT * FROM USER WHERE ROLE=2");
    $groupdata=mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupdata']=$groupdata;

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