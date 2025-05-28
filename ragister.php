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
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(120deg,rgb(251, 253, 253), #96e6a1);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .ragister {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        padding: 30px;
        display: flex;
        flex-direction: column;
    }

    .ragister .h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .ragister input, .ragister select {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .ragister button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin-top: 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .ragister button:hover {
        background-color: #45a049;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }
</style>

<body>
    <form method="POST" class="ragister">
        <h2 class="h2">Register</h2>
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