<?php
// function getConnection(){
//     return new mysqli("localhost","root","","biodata");
// Master-Dipankar github}
include "func.php";

foreach ($result as $value) {
    echo $value['name'];
    echo "<br>"; 
    echo $value['dob']; 
    echo "<br>"; 
    echo $value['email']; 
    echo "<br>"; 
    echo $value['gender']; 
    echo "<br>"; 
    echo $value['religion']; 
    echo "<br>"; 
    echo $value['cast']; 
    echo "<br>"; 
    echo $value['fname']; 
    echo "<br>"; 
    echo $value['mname'];  
    echo "<br>"; 
    echo $value['language'];
    echo "<br>"; 
    echo $value['course'];
    echo "<br>";
    echo $value['saddress']; 
    echo "<br>";
    echo $value['city'];
     echo "<br>"; 
     echo $value['state']; 
     echo "<br>"; 
     echo $value['pin']; 
     echo "<br>"; 
     echo $value['mphone']; 
     echo "<br>";
     echo "==========================";
     echo "<br>";
}

?>