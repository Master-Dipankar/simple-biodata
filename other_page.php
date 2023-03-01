<html>
    <body>
<?php

$con=new mysqli("localhost","root","","biodata");

 //connection_check
 if($con === false){
    die("Error: unable to Connect "
        . mysqli_connect_error());
}

$name = $_POST['first_name'];
$birthday =$_POST['birthday'];
$email_address=$_POST['email_address'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$F_name=$_POST['F_name'];
$M_name=$_POST['M_name'];
$language=$_POST['language'];
$course=$_POST['course'];
$street_address=$_POST['street_address'];
$City=$_POST['City'];
$State=$_POST['State'];
$Pin_code=$_POST['Pin_code'];
$phone=$_POST['phone'];

// print_r($_POST);
// die(0);

//insert query
$sql = "INSERT INTO `candidate`(`name`, `dob`, `email`, `gender`, `religion`, `cast`, `fname`, `mname`, `language`, `course`, `saddress`, `city`, `state`, `pin`, `mphone`) VALUES ('$name','$birthday','$email_address','$gender','$religion','$caste','$F_name','$M_name','$language','$course','$street_address','$City','$State','$Pin_code','$phone')";

//confirmation
try{
    mysqli_query($con, $sql);
    echo "success";
}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}
// if(mysqli_query($con, $sql)){
//  echo "success";
// }

// else{
//     echo "Error: $sql."
//     . mysql_error($con);
// }



mysqli_close($con);
?>
<body>
</html>