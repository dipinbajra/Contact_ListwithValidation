<?php
if( isset($_POST['add_data'])) {
    $name = $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    if($name == NULL || $name == "" ) {
        echo "name is required";
        return;
    }

   
        
        


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo(" Please enter  valid email address");
        return false;
      
      }  
      
    else{
       
       
     

    

    echo "The Name is: ". $name ." <br>" ."The Contact No. is: ". $phone. "<br>"."The E-mail Address is:". $email;

    include 'db.php';

    $sql="INSERT INTO contact_table(name, phone, email) VALUES('$name' , '$phone', '$email')";
    $result=mysqli_query($conn, $sql);

    if($result){
        header('Location:index.php');
    }
    return true;
}
} else {
    die('s');
}
?>


