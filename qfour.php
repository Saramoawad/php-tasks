<form method="POST">
    <input type="number" name="num1" placeholder="Enter Num1">
    <input type="number" name="num2" placeholder="Enter Num2">
    <button type="submit">send</button>
</form>

<?php

    $N=$_POST['num1'];
    $M=$_POST['num2'];

    echo"$N<br>";
    echo"$M <br>";
    echo($N % 10) + ($M % 10);



?>