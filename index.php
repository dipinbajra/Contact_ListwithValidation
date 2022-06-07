<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->
    <script src="js/main.js"></script>  
  
    <title>Contact Book</title>
</head>
<body >
    <header>
        <h1 class>Contact List</h1>
    </header>   
   
    <section class="first-section ">


        <div class="container ">
            <Table >
            <tr>
                <th>Name</th>
                <th>Contact No.</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
            <?php

                include 'db.php';

                $sql="SELECT * FROM contact_table";
                $result=mysqli_query($conn, $sql);

                if($result){
                 while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $phone=$row['phone'];
                    $email=$row['email'];
                    $website=$row['website'];
                   
            ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $phone ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $website?></td>

                        <td><a href="delete.php?id=<?php echo $id?>">Delete</a></td>
            
                     </tr>
             <?php
                        }
                    }

            ?>
    
           
            </Table>
        </div>
    </section>
    <section class="second-section ">
        <form action="add_data.php " method="POST" name="form1" id="form1"   >
            </div>  
                <?php
                  

                    if( isset($_GET['name_occurance'])&& $_GET['name_occurance']==true){
                        echo("The name is already taken!");
                    }
                ?>
                <!-- <div class="submission-success">
                    <?php
                        // if( isset( $_GET['submission_status'] ) && $_GET[ 'submission_status']==true )
                        //     echo "Submission Successful !"
                    ?>  
                </div> -->
            
            <label for="Name">Name:</label>
            <input type="text " name="name" id="name" class="mb-3"   >
            <!-- <div class="message-invalid mb-3">
                    <?php 
                    //    // if( isset( $_GET['name_status']) && $_GET[ 'name_status' ]== 'invalid' ){
                    //         echo( "Please enter a Name" );

                    //     }
                    //     else if(isset( $_GET['name_status']) && $_GET['name_status']== 'Only letters and white space allowed' ){
                    //         echo ( "Only letters and white space allowed" );
                    //     }
                    ?>
            </div> -->
            
            <label for="Conatact No.">Contact No.:</label>
            <input type="number " name="phone" id="phone" class="mb-3"  >
            <!-- <div class="message-invalid mb-3">
                    <?php
                        // if( isset( $_GET[ 'phone_status' ]) && $_GET[ 'phone_status' ]== 'invalid'){
                        //     echo( "Number must be of 10 digits" ) ;    
                        // }
                    ?>
            </div> -->

            <label for="E-mail">E-mail:</label>
            <input type="email" name="email" id="email" class="mb-3"   >
            <?php
              if( isset($_GET['email_occurance'])&& $_GET['email_occurance']==true){
                echo("The email is already taken!");
            }
            ?>
            <!-- <div class="message-invalid mb-4">
                <?php
                    // if( isset( $_GET[ 'email_status' ] ) && $_GET[ 'email_status' ]== 'invalid' ){
                    //     echo("Invalid E-mail. Please enter valid E-mail address.");
                    //     }        
                ?>
            </div> -->

            <label for="Website-url">Website:</label>
            <input type="url" name="website" id="website" class="mb-4" >

            <input type="submit" value="Save" class="submit" name="add_data">
    
        </form>


    </section>
   



   
</body>
</html>