<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver</title>
</head>
<body>
    <h1>para ver los usuarios</h1>
    <?php 
    if($profe) {
        echo'Bienvenido al curso '.$curso.'con el instructor'.$profe;
    } else {
        echo'EL '.$curso. 'no se apertura por falta de instructor';   
    };
?>
    
</body>
</html>

