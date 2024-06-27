<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $email =  $_POST['email'];
    $password =  $_POST['pass'];
   
    $sql = "SELECT * FROM account WHERE email = '$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    if($count == 1){  
        if ($email == 'tiffany@gmail.com' && $password == 'admin') {
            header("Location: adminpage.html");
        } else {
            header("Location: homepage.html");
        }
    }else{  
        echo  '<script>
                    window.location.href = "index.php";
                    alert("Login failed. Invalid username or password!!")
                </script>';
    } 

}
?>