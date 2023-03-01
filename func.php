<?php
    $con=new mysqli("localhost","root","","biodata");
    $result=$con->query("SELECT * FROM `candidate` WHERE gender='1';");
?>
