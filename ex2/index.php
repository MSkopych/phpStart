<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "New page"; ?></title>
</head>
<body>
    <?php
    echo "dzisejsza data i czas:";
    echo date(DATE_RSS);
    ?><br>
    <?php
    include 'php1.php';
    ?>
 
    
</body>
</html>