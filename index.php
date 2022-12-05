<?php
    $carachterPsw = [
        'a',
        'b',
        'c',
        'D',
        'E',
        'f',
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        '!',
        '?',
        '&',
        '%',
        '$',
        '<',
        '>',
        '^',
        '+',
        '-',
        '*',
        '/',
        '(',
        ')',
        '[',
        ']',
        '{',
        '}',
        '@',
        '#',
        '_',
        '='
    
];
    function generatePsw($carachterPsw){
        $pswGenerated = '';
        for($i = 0; $i < $_GET['nCharactersPsw']; $i++) {
            $pswGenerated .= $carachterPsw[rand(0, count($carachterPsw) - 1)];
        }
        echo $pswGenerated;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Generatore Password</title>

    <link rel="stylesheet" href="./style.css">

</head>
<body>
   <main>
        <div class="ft-container">
            <h1 class="text-uppercase mb-2">Strong password generator</h1>
            <div class="row">
                <div class="col my-5 m-auto">
                    <form action="./index.php" method="GET">
                        <label class="form-label" for="inputNPsw">Inserisci il numero di caratteri della tua password</label> 
                        <input class="form-control w-25"  type="number" placeholder="Inserisci il numero di caratteri" name="nCharactersPsw" id="inputNPsw">
                        <div class="py-3">
                            <button type="submit" class="ft-btn">Genera</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php  if(!empty($_GET['nCharactersPsw'])) : ?>
                <h2 class="pass">
                    <?php generatePsw($carachterPsw); ?>
                </h2>
            <?php  endif; ?>
            
        </div>

   </main>
    
</body>
</html>