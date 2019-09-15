
<?php

    function a($callback){
        
        $callback();

    }

    a(function(){
        echo "terminou";
    })

?>