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
            --backgroundHov: #5758ad;
            --foreground: #171717;
            --text: white;
        }
        body{
            background-color: var(--background);
            
        }
        *{
            color: var(--text);
        }
        .container{
            flex-direction: column;
        }
        .title{
            display: flex;
            margin-top: 15px;
            margin-bottom: 20px;
            margin-left: 15px;
            font-size: 2rem;
            font-weight: 700;
            text-decoration: none;
            color: var(--text);
        }
        .menu__list{
            list-style: none;
            font-weight: bold;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        .list{
            /* font-weight: 700; */
            padding: 15px 20px;
            width: 100%;
            font-size: 1rem;
            text-decoration: none;
            color: var(--text);
            box-sizing: border-box;
            display: inline-block;
        }

        .list:hover{
            background-color: var(--backgroundHov);
        }

    </style>
<body>
    <div class="container">
        <a class="title" href="../dashboard.php">Cafe ABC Dashboard</a>
        <ul class="menu__list">Menus
            <li><a class="list" href="./tables/tables.php">Tables</a></li>
            <li><a class="list" href="">Queue</a></li>
        </ul>
        <ul class="menu__list">Users
            <li><a class="list" href="">Logout</a></li>
        </ul>
    </div>
</body>
</html>