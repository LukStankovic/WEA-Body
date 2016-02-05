<?php 
require_once("bod.php");
$prvni = new Bod("A",1,1);
$druhy = new Bod("B",3,2);
$treti = new Bod("C",5,10);
?>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <title>Práce s body</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
<body>
<h1>Práce s body</h1>
    <ul>
        <li>Vzdálenost bodu A[1,1] od nuly: <?php echo number_format($prvni->vzdalenostOdNuly(),4); ?></li>
        <li>Vzdálenost 2 bodů <?php echo $prvni; ?> a <?php echo $druhy; ?>: 
        <?php echo number_format($prvni->vzdalenostOdBodu($druhy),4); ?></li>
        <li>Posun bodu <?php echo $treti; ?> o px=3, py=8: C
        <?php $treti->posun(3,8); ?>
        <?php echo $treti; ?>
        </li>
    </ul>
</body>
</html>