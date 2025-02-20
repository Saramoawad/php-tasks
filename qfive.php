<form method="POST">
    <input type="number" name="num1" placeholder="Enter Num1">
    <button type="submit">send</button>
</form>

<?php

    $X=$_POST['num1'];
    $first_digit=intval($X[0]);
    if($first_digit%2 == 0)
    {
        echo"EVEN";
    }else{
    echo"ODD";
    }



    function test($X){
        $X = strval($X);
        $first_digit=intval($X[0]);
        if($first_digit%2 == 0)
        {
            echo"EVEN";
        }else{
        echo"ODD";
        }

    }
    test(3481111);


?>