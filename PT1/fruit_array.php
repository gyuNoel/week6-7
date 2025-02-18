<?php

$fruit_array = ['apple','banana','orange','guava','mango'];


function ordered_list_from_array ($array){
    echo '<ol>';

    for($x = 0;$x<=count($array)-1;$x++){
        echo '<li>';
        echo $array[$x];
        echo '</li>';
    }

    echo '</ol>';
}

echo ordered_list_from_array($fruit_array);

?>