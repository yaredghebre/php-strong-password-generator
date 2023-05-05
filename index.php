<?php
include __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center text-warning mt-5">Strong Password Generator</h1>
        <h2 class="text-center text-white my-5">Genera una password sicura</h2>

        <div class="row flex-column text-white fs-5 p-4 g-3">

            <!-- FORM  -->
            <div class="input-box flex-column col border border-white rounded p-4 bg-white text-dark">
                <form action="index.php" method="GET">

                    <div class="form-group row mb-5">
                        <label for="length" class="col-sm-3 col-form-label">Lunghezza Password:</label>
                        <div class="col-sm-6 d-flex align-items-center gap-5">
                            <input type="number" name="length" id="length" max="12" min="6" class="form-control w-50 mr-5" placeholder="Inserisci il numero di caratteri" value="">
                        </div>
                    </div>

                    <fieldset class="form-group mb-5">
                        <div class="row">
                            <legend class="col-form-label col-sm-6 pt-0">Consenti ripetizioni di uno o più caratteri:</legend>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row mb-5">
                        <div class="col-sm-6">Consenti inserimento di:</div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                <label class="form-check-label" for="gridCheck3">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- BOTTONE -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary m-1">Invia</button>
                            <button type="reset" class="btn btn-secondary m-1">Annulla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>