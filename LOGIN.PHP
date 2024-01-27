<?php
session_start();
include("conn.php");
include("FUNCTIONS.PHP");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $dbpassword = $_POST['password'];

    if (!empty($username) && !empty($dbpassword) && !is_numeric($username)) {
        $USER_ID = random_num(20);

        $query = "SELECT * FROM registration WHERE username = '$username' and password='$password'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] == $dbpassword) {
                $_SESSION['USER_ID'] = $user_data['user_id'];
                header("Location:WELCOME.PHP");
                die;
            }
       
    } else {
        echo "Please enter valid information.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="REGISTRATION.CSS">
</head>
<body>
    
    <style> 
  
        body{
            background-image: url('Screenshot\ \(37\).png');
       background-size: cover;
       background-repeat: no-repeat;
          width:100%;
        height:100%;
        }
      </style>
    
    <header>
       
    </header>
    <main>
        <h1>LOGIN</h1>
        <form action="SIGNUP.PHP" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <br>
           
            
            <input type="submit" value="LOGIN">
        </form>
    </main>
</body>
</html>