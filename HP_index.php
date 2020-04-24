<?php
define('min_damage', 1);
define('max_damage', 100);
$damage =rand(min_damage, max_damage);
$hp=100;

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>počáteční HP : <?=$hp?></p>
   
    <?php
do {
    $damage =rand(min_damage, max_damage);
    $hp = $hp - $damage ;
    echo "<p>dostals damage za $damage, Zbylo ti $hp</p>"; 
        
} while ($hp > 0);

?>
    <p>Game Over - zemřels !</p>
</body>
</html>