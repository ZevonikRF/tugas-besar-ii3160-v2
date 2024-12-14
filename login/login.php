<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cafe ABC Login</title>
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
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .title__container{
            display: flex;
            justify-content: center;
        }
        .title{
            font-size: 2rem;
            font-weight: 700;
            color: var(--text);
        }
        form{
            display: flex;
            padding: 50px;
            background-color: var(--backgroundSd);
            width: 500px;
            height: 500px;
            justify-content: center;
            flex-direction: column;
            gap: 30px;
        }
        form input{
            padding: 30px;
            background-color: rgb(61, 67, 139);
            border: none;
            color: white;
        }
        form a{
            padding: 30px;
            background-color: brown;
            color: var(--text);
            text-align: center;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <form action="">
            <!-- Title -->
            <div class="title__container">
                <div class="title">Cafe ABC Dashboard</div>
            </div>
            <!-- Input -->
            <input type="text" placeholder="username" name="username" required />
            <input type="password" placeholder="password" name="password" required />
            <!-- Button -->
            <a href="">Login</a>
        </form>
    </div>
</body>
</html>