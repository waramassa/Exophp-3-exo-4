<?php
    $departement = array(02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme');
    // print_r permet d'afficher le code php //
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP3 exo4</title>
</head>
<body>
    <?php
        foreach ($departement as $key => $element) {
    ?>
    <p> <?php echo $element; ?></p>
    <?php }
    ?>
    
</body>
</html>