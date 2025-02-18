<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sideOneLen = $_POST['sideone'];
    $sideTwoLen = $_POST['sidetwo'];
    $sideThreeLen = $_POST['sidethree'];

    $semiPerimeter = ($sideOneLen+$sideTwoLen+$sideThreeLen)/2;

    $subArea = $semiPerimeter*($semiPerimeter-$sideOneLen)*($semiPerimeter-$sideTwoLen)*($semiPerimeter-$sideThreeLen);

    $triangleArea = $subArea ** 0.5;
    $formattedArea = number_format($triangleArea,2);

    echo $formattedArea;
}

?>