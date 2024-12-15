<?php
    session_start();
    
    if (isset($_POST["is_login"])) {
        header("location: ./../login/login.php"); 
    }

    if (isset($_POST['logout'])) {
        $_SESSION["is_login"] = false;
        session_unset();
        session_destroy(); 
        header("location: ./../login/login.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cafe ABC Dashboard</title>
    <style>
        :root {
            --background: #1f2170;
            --backgroundSd: #272987;
            --foreground: #171717;
            --text: white;
        }
        body{
            background-color: var(--background);
           
        }
        .container{
            display: flex;
            /* flex-direction: row; */
            /* height: 100vh; */
            margin: 0;
            padding: 0;
        }
        .sidebarcontent {
            height: 100vh;
            width: 430px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: var(--backgroundSd);
            overflow-x: hidden;
            /* padding-top: 20px; */
        }
        .logout {
            padding: 10px;
            margin-top: 10px;
            margin-left: 140px;
            background-color: brown;
            border: none;
            color: var(---text);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebarcontent">
            <?php include "sidebar.php"?>
        </div>
        <form action="dashboard.php" method="POST">
            <button type="submit" name="logout" class="logout">Log out</button>
        </form>
    </div>
</body>
</html>