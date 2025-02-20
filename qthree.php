<form method="POST">
    <input type="number" name="num1" placeholder="Enter Num1">
    <input type="number" name="num2" placeholder="Enter Num2">
    <input type="number" name="num3" placeholder="Enter Num2">
    <input type="number" name="num4" placeholder="Enter Num2">
    <button type="submit">send</button>
</form>
<?php

    $A=$_POST['num1'];
    $B=$_POST['num2'];
    $C=$_POST['num3'];
    $D=$_POST['num4'];
    $X=($A*$B)-($C*$D);
    echo"Difference = $X";


?>