<?php 
require_once("bod.php");
$prvni = new Bod(1,1);
?>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <title>Práce s body</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
<body>
<h1>Práce s body</h1>
    <p>
        Vzdálenost bodu A[1,1] od nuly: <?php echo $prvni->vzdalenostOdNuly(); ?>
    </p>
</body>
</html>