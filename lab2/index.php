<!-- <?php

// echo "hello world";
// $name=readline();
// echo "hello,$name \n";

?> -->



<!-- q1-->
<form method="POST">
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>

<?php

    // input
 
    $name = $_POST["name"];
    echo "Hello, $name";


    // function

    function sayHello($name){
        echo "Hello, $name";
    }
    sayHello("ahmed");

?>


