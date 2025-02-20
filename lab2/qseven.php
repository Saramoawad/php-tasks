<?php

    function luckyNumber($X){
        $X=strval($X);
        $firstDigit=intval($X[0]);
        $secondDigit=intval($X[1]);
        if($firstDigit% $secondDigit ==0 || $secondDigit%$firstDigit==0){
            echo"YES";
        }else{
            echo"NO";
        }

    }
    luckyNumber(72);


?>