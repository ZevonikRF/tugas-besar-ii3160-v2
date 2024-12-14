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
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebarcontent">
            <?php include "sidebar/sidebar.php"?>
        </div>
    </div>
</body>
</html>