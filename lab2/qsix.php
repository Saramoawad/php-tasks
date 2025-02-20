<?php

    function game($a,$b,$k){

        if($a%$k==0 && $b%$k==0)
        {
            echo"Both";
        }elseif($a%$k==0 && $b%$k!=0)
        {
            echo"Memo";
        }elseif($a%$k!=0 && $b%$k==0)
        {
            echo"Momo";
        }else{
            echo"No one";
        }

    };
    game(9,4,3);

?>