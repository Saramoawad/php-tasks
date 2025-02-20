<?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $address =$_POST["add"];
    $country =$_POST["country"];
    $gender = $_POST["gender"];



    
    echo "<h2>data</h2>";
    echo "<p><strong>First Name:</strong> $fname</p>";
    echo "<p><strong>Last Name:</strong> $lname</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";

?>
