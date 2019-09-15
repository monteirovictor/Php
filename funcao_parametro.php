<?php

    $people = array(

        'nome'=>'boris',
        'idade'=>17
    );

    foreach ($people as &$value) {
        if (gettype($value)==='integer') {
            $value +=7;
        }
       echo $value ;
      
    }
    echo "<br><br>";
    print_r($people);
?>