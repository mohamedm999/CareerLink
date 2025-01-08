<?php 
    session_start();

    $user = $_SESSION['user'];

    if (!isset($user) && $user['user_role'] != 'recruiter') {
        header('Location: ../auth/login.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter</title>
</head>
<body>
    Hello, Recruiter!
</body>
</html>