<?php

if( isset( $_POST['add_data'] ) ) {
    $name = $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $email_is_valid = 'valid';
    $name_is_valid = 'valid'; 
    $phone_is_valid =  'valid'; 
    $phone_is_longer =  false; 

    if( $name == NULL || $name == "" ) {
        $name_is_valid = "invalid";
    }else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $name_is_valid = "Only letters and white space allowed";
    }
    
    if(!preg_match("/^[6-9][0-9]{9}$/", $phone )){
        $phone_is_valid = "invalid";
     
    } 

    if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_is_valid = "invalid";
    }

     
    if( $email_is_valid == 'invalid' || $name_is_valid == 'Only letters and white space allowed' || $phone_is_valid == 'invalid' || $name_is_valid == 'invalid' ) {
        header('Location:index.php?email_status=' . $email_is_valid . '&phone_status='. $phone_is_valid . '&name_status=' . $name_is_valid  );
    } else {
        echo "The Name is: ". $name ." <br>" ."The Contact No. is: ". $phone. "<br>"."The E-mail Address is:". $email;

        include 'db.php';

        $sql="INSERT INTO contact_table(name, phone, email) VALUES('$name' , '$phone', '$email')";
        $result=mysqli_query($conn, $sql);

        if( $result ) {
            header('Location:index.php' );
        }
    }
    
    if ($result){
        header('Location:index.php?submission_status='.$result);
    }
} else {
    die('s');
}
?>


