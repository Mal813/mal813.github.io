<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nick = $_POST['nick'];
$country = $_POST['country'];
$dob = $_POST['dob'];
$mail = $_POST['mail'];

$dbconnect=mysqli_connect('localhost','root','','signup');

$sql = mysqli_query($dbconnect, "insert into form(id_form,first_name,last_name,nickname,country,birth_date,email) values('','$firstname','$lastname','$nick','$country','$dob','$mail')");
if ($sql) {
    echo"Inserted";
    }
    else {
        echo "Error";
}
?>