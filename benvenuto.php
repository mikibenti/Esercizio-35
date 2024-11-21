<?php
    session_start();
    if($_SESSION['permission'] != true) {
        header("Location: ./errore.php");
    }
    if(!isset($_SESSION['time_start'])) {
        $_SESSION['time_start'] = time();
    } else if (time() - $_SESSION['time_start'] > 20){
        header("Location: ./sessione_scaduta.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">BENVENUTO</h1>
    <hr><h2>Zavataro Fabio</h2>
    <h2>09/07/2006</h2>
    <i><?php 
            $timestamp = time();
            echo date("Y-m-d h:i:s A",$timestamp)
        ?>
    </i>
    <br><br><button type="button" onclick="location.href = './script_logout.php';" class="btn btn-danger">Log-Out</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>