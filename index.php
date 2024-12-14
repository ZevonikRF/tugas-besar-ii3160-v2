<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cafe ABC</title>
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
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .title{
            font-size: 2rem;
            font-weight: 700;
            color: var(--text);
        }
        a{
            padding: 20px 50px 20px;
            margin-top: 20px;
            background-color: white;
            font-weight: bold;
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Cafe ABC Dashboard</div>
        <a href="login/login.php">Start</a>
    </div>
</body>
</html>