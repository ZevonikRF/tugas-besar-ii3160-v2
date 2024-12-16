<?php
    include "./../db.php";

    $sqlquery = "SELECT * FROM tables";
    $result = mysqli_query($db, $sqlquery);
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $id = $_POST['idtables'];
        $action = $_POST['action'];

        if ($action == 'ditempatin'){
            $newstatus = 1;
        }
        else {
            $newstatus = 0;
        }

        $updatsqlequery = "UPDATE tables 
                    SET isoccupied = $newstatus
                    WHERE idtables = $id";

        mysqli_query($db, $updatsqlequery);
        header("Location: tables.php");
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
        .button__ditempati{
            padding: 10px;
            background-color: brown;
            border: none;
        }
        .button__kosong{
            padding: 10px;
            background-color: darkolivegreen;
            border: none;
        }
    </style>
</head>
<body>
    <?php include "dashboard.php"?>
    <div class="tables__header">
        <div class="tables__header__title">Daftar Meja</div>
    </div>
    <div class="tables__header">
        <table class="tables__info">
            <thead>
                <tr>
                    <td>Nomor Meja</td>
                    <td>Status Meja</td>
                    <td>Ubah Status</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $status = $row["isoccupied"] ? "Ditempati" : "Kosong";
                        $buttonclass = $row["isoccupied"] ? "button__kosong" : "button__ditempati";
                        $buttonaction = $row["isoccupied"] ? "kosong" : "ditempatin";
                        $buttontext = $row["isoccupied"] ? "Kosong" : "Ditempati";
                ?>
                <tr>
                    <td>
                        <?php 
                        echo $row["idtables"];
                        ?>
                    </td>
                    <td>
                        <?php 
                        echo $status;
                        ?>
                    </td>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="idtables" value="<?php echo $row['idtables']; ?>">
                            <input type="hidden" name="action" value="<?php echo $buttonaction; ?>">
                            <button type="submit" class="<?php echo $buttonclass; ?>">
                                <?php echo $buttontext; ?>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
                <!-- Placeholder -->
                <!-- <tr>
                    <td>Meja 01</td>
                    <td>Kosong</td>
                    <td>
                        <form method="POST" action="">
                            <button class="button__ditempati">Ditempati</button>
                            <button class="button__kosong">Kosong</button>
                        </form>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
</html>