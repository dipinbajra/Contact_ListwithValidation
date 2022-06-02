<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>  
  
    <title>Contact Book</title>
</head>
<body onload="document.form1.email.focus()" >
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
                    ?>
                <tr>
                    <td><?php echo $name ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $email ?></td>

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
        <form action="add_data.php " method="POST" name="form1" onsubmit="return validateEmail(document.form1.email)">
            <label for="Name">Name:</label>
            <input type="text " name="name" id="name" class="mb-3" >
            <label for="Conatact No.">Contact No.:</label>
            <input type="number " name="phone" id="phone" class="mb-3" required>
            <label for="E-mail">E-mail:</label>
            <input type="text" name="email" id="email" class="mb-4" required>

            <input type="submit" value="Save" class="submit" name="add_data">
    
        </form>


    </section>
   



   
</body>
</html>