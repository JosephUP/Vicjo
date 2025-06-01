<?php

include 'conexion.php';

if(isset($_POST['send'])) {
    if(
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
    ){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($conexion, $query);

        if($result) {
            ?>
            <h3 class="ok">User registered successfully!</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">Error registering user!</h3>
            <?php
    }
}
?>
