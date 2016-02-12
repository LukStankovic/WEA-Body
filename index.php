<?php 
require_once("tridy/bod.php");
require_once("tridy/bod3d.php");
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
   <h2>2D</h2>
    <ul>
        <li>Vzdálenost bodu <?php echo $prvni; ?> od nuly: <?php echo number_format($prvni->vzdalenostOdNuly(),4); ?></li>
        <li>Vzdálenost 2 bodů <?php echo $prvni; ?> a <?php echo $druhy; ?>: 
        <?php echo number_format($prvni->vzdalenostOdBodu($druhy),4); ?></li>
        <li>Posun bodu <?php echo $treti; ?> o px=3, py=8: C
        <?php $treti->posun(3,8); ?>
        <?php echo $treti; ?>
        </li>
    </ul>
<hr>
    <h2>3D</h2>
    <?php 
        $prvni_3d = new Bod3D("A",1,2,3);
        $druhy_3d = new bod3D("B",3,4,5);
    ?>
    <ul>
        <li>Výpis 3D bodu - <?php echo $prvni_3d; ?></li>
        <li>Vzdzálenost od počátku - <?php echo number_format($prvni_3d->vzdalenostOdNuly(),4); ?></li>
        <li>Vzdálenost od bodu <?php echo $druhy_3d;?> - <?php echo number_format($prvni_3d->vzdalenostOdBodu($druhy)); ?></li>
        <li>Posun bodu <?php echo $prvni_3d;?> o 3: 
        <?php 
            $prvni_3d->posun(3,3,3);
            echo $prvni_3d; 
        ?>
        </li>
    </ul>
</body>
</html>