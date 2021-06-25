<?php 
    $p = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam tenetur laudantium minus culpa qui nostrum ipsum eligendi rem aspernatur suscipit?" ;
    $esclusa = $_GET["parola"];
    $p_esclusa = str_replace($esclusa, "***", $p);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body>
        <div>
            <?php echo "PARAGRAFO: " . $p_esclusa; ?>
        </div>
        <div>
            <?php echo "Il paragrafo è lungo " . strlen($p_esclusa) . "caratteri."; ?>
        </div>
        <div>
            <?php echo "La parola sostituita è: " . $esclusa; ?>
        </div>
    </body>
</html>