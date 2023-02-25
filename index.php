<?php

$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£%&abcdefghijklmnopqrstuvwxyz';

$password = '';

if (isset($_GET['length'])) {
    $passwordlength = intval($_GET['length']);
    for ( $i = 0; $i < $passwordlength; $i++ ) { 
       $randomNumber = rand(0, strlen($letters) - 1);
       $password .= $letters[$randomNumber];
    }
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div class="container text-light">
            <div class="row">
                <div class="col text-center my-5">
                     <h1>
                        PHP Strong Password Generator
                    </h1>
                    <hr>
                </div>
            <div class="row">
                <div class="col text-center">
                    <div class="mb-3">
                        Seleziona la lunghezza della tua password:
                    </div>
                    <form action="" method="GET">
                        <div>
                            <label for="password-length"></label>
                            <input class="my-input" type="number" name="length" id="password-length" min="8" max="32" required value="<?php echo ($_GET['length'] ?? 8); ?>">
                        </div>
                        <button type="submit">Genera</button>

                        <h1>
                            <?php
                                echo $password;
                            ?>
                        </h1>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>