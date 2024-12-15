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
        .tables__header{
            background-color: var(--backgroundSd);
            margin: 20px 20px 10px 450px;
            padding: 20px;
        }
        .tables__header__title{
            font-weight: bold;
        }
        form input{
            padding: 15px;
            background-color: rgb(61, 67, 139);
            border: none;
            color: white;
            width: 100%;
        }
        .button__container{
            margin-top: 15px;
        }
        .button__add{
            padding: 10px;
            background-color: darkolivegreen;
            border: none;
        }
        .button__back{
            padding: 12px;
            background-color: brown;
            border: none;
            text-decoration: none;
            color: var(---text);
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <?php include "dashboard.php"?>
    <div class="tables__header">
        <div class="tables__header__title">Tambah Daftar Antrian</div>
    </div>
    <div class="tables__header">
        <form action="">
            <input type="text" placeholder="nama penunggu" name="penunggu" required/>
            <div class="button__container">
                <button class="button__add">Tambah Penunggu</button>
                <a href="queue.php" class="button__back">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>