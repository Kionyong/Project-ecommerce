<?php
    session_start();
    include('config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username=trim($_POST["username"]);
        $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
        $role=$_POST["role"];

        $sql="INSERT INTO tbusers (username,password,role) VALUES(?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("sss",$username,$password,$role);

        if($stmt->execute()){
            header("Location: http://localhost:8080/FilePHP/Project-ecommerce/home.php");
            exit();
        }else{
            echo "Register failed. Maybe username already exists.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragister</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form id="ragister" method="POST">
        <h2>Register</h2>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Role:
        <select name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>