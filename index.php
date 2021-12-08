<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($password) || empty($username)){
        echo "Please fill data";
    }else{
        $server = "localhost";
        $user = "root";
        $pass = "";
        $database = "my_form";
        $connection = new mysqli($server, $user, $pass, $database);    
        $sql = "INSERT INTO `form_data`(`Name`, `Password`) VALUES ('$username','$password')";
        if (mysqli_query($connection, $sql)) {
            echo "Username : " . $username;
            echo "<br>";
            echo "Password : " . $password;
            echo "<b><h2 style='color='green''>INSERT SUCCESS</h2></b>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    }
?>