<?php
$name = $_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

echo "The Name is: ". $name ." <br>" ."The Contact No. is: ". $phone. "<br>"."The E-mail Address is:". $email;

include 'db.php';

$sql="INSERT INTO contact_table(name, phone, email) VALUES('$name' , '$phone', '$email')";
$result=mysqli_query($conn, $sql);

if($result){
    header('Location:index.php');
}

?>
