


<!-- q1-->
<form method="POST">
    <input type="number" name="num1" placeholder="Enter Num1">
    <input type="number" name="num2" placeholder="Enter Num2">
    <button type="submit">send</button>
</form>

<?php
    // input
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $sum=$num1+$num2;
    echo"<span>num1+num2= </span>$sum <br>";
    $multiplication=$num1*$num2;
    echo"<span>num1*num2= </span>$multiplication <br>";
    $subtraction=$num1-$num2;
    echo"<span>num1-num2= </span>$subtraction <br>";
    // echo "Hello, $name";

    // function
    function arethmatic($num1,$num2){
        $sum=$num1+$num2;
        echo"<span>num1+num2= </span>$sum <br>";
        $multiplication=$num1*$num2;
        echo"<span>num1*num2= </span>$multiplication <br>";
        $subtraction=$num1-$num2;
        echo"<span>num1-num2= </span>$subtraction <br>";
    }
    arethmatic(5,2);

?>


