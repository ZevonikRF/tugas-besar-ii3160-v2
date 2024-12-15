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
        .tables__info{
            /* width: 100px;    */
            
        }
        .tables__info td{
            padding: 10px 200px 10px 10px;
        }
        .button__update{
            padding: 10px;
            background-color: brown;
            border: none;
        }
        .button__add{
            padding: 10px;
            margin-top: 10px;
            background-color: brown;
            border: none;
            text-decoration: none;
            color: var(---text);
        }
    </style>
</head>
<body>
    <?php include "../dashboard.php"?>
    <div class="tables__header">
        <div class="tables__header__title">Daftar Antrian</div>
    </div>
    <div class="tables__header">
        <table class="tables__info">
            <thead>
                <tr>
                    <td>Nomor Antrian</td>
                    <td>Nama Penunggu</td>
                    <td>Sudah di Dalam?</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Antrian 1</td>
                    <td>Mako Hitachi</td>
                    <td><form action="">
                            <button class="button__update">Sudah</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
        </table>
        <div class="button__container">
            <a href="/add/add.php" class="button__add">Tambah Antrian</a>
        </div>  
    </div>
</body>
</html>