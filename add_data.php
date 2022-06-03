<?php

if( isset( $_POST['add_data'] ) ) {
    $name = $_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    
    $email_is_valid = 'valid';
    $name_is_valid = 'valid';  

    if( $name == NULL || $name == "" ) {
        $name_is_valid = "invalid";
    }

    if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_is_valid = "invalid";
    }


    if( $email_is_valid == 'invalid' || $name_is_valid == 'invalid' ) {
        header('Location:index.php?email_status=' . $email_is_valid .'&name_status=' . $name_is_valid );
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


