<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $tomb[0] = "alma";
        $tomb[2] = "körte"; 
        $tomb[3] = 2;
        $tomb['elso'] = "cica";
    ?>
    <pre>
<?php var_dump($tomb); ?>
    </pre>
    <pre>
<?php var_dump($_GET); ?>
    </pre>
    
    <ul>
        <?php
        foreach($tomb as $elem) {
            echo "<li>$elem</li>";
        }
        ?>
    </ul>
    <?php
    $max = 100;
    if(isset($_GET['max'])){
        $max = $_GET['max'];
    }
    for($i = 0; $i < 8; $i++) {
        $randomszamok[$i] = mt_rand(1,$max);
    }
    
    ?>
    <ul>
        <?php
        foreach($randomszamok as $elem) {
            echo "<li>$elem</li>";
        }
        ?>
    </ul>
    
    <h3>Van e benne 5-tel osztható?</h3>
    <?php
    $van = false;
    foreach($randomszamok as $szam){
        if($szam % 5 == 0){
            $van = true;
        }
    }
    if($van){
        echo "Van";
    }
    else{
        echo "Nincs";
    }
    echo " öttel osztható szám a tömbben.";
    
    $osszeg = 0;
    foreach($randomszamok as $szam){
        $osszeg += $szam;
    }
    echo "<p>Összeg: $osszeg</p>";
    
    ?>
    
</body>
</html>