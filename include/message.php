<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$quantity = $_POST['quantity'];


$query="INSERT INTO contact (cname,cemail,csubject,cmessage,quantity) "; 
$query.="VALUES('$name','$email','$subject','$message','$quantity')";
$run = mysqli_query($db,$query);
if($run){
    echo 'Your message has been sent. Thank you!';
}else{
	echo "Error! Nothong was entered check your configs!";
}
