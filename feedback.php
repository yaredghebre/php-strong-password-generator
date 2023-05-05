<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="wrapper text-center text-white ">

        <!--PASSWORD GENERATA -->
        <div class=" border rounded w-50 mx-auto my-5 p-5">
            <h1>La tua nuova password è: </h1>
            <p class="fs-1 text-warning"><?php echo $_SESSION["password"]; ?></p>
        </div>
    
        <!-- BOTTONE HOME PAGE -->
        <a class="text-danger fs-2" href="index.php">Torna alla Home Page</a>
    </div>

</body>

</html>