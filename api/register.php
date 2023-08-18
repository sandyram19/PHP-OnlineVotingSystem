<?php
include("connect.php");

$name=$_POST['pname'];
$mobile=$_POST['phone'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$address=$_POST['address'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$role=$_POST['role'];

if($pass==$cpass){
    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect,"INSERT INTO USER (name,mobile,password,address,photo,role,status,votes) VALUES ('$name','$mobile','$pass','$address','$image','$role',0,0)");
    if($insert){
        echo '
            <script>
                alert("Registered Successfully");
                window.location="../";
            </script>
    ';

    }else{
        echo '
            <script>
                alert("Some Error Occurred");
                window.location="../routes/register.html";
            </script>
    ';
        

    }
}else{
    echo '
    <script>
    alert("Password and Confirm Password does not match");
    window.location="../routes/register.html";
    </script>
    ';
}

?>