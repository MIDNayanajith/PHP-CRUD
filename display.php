<?php
     include 'connect.php';

     ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


    <div class="container">

    <button class ="btn btn-primary my-5"> <a href ="user.php" class ="text-light">Add user</a></button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">E mailt</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

        $sql ="select *from crud";
        $result =mysqli_query($con,$sql);

           if($result){

           while($row =mysqli_fetch_assoc($result)){
           $id =$row['id'];
           $name =$row['name'];
           $email =$row['email'];
           $mobile =$row['mobile'];
           $password =$row['password'];

           echo '<tr>
           <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$email.'</td>
           <td>'.$mobile.'</td>
           <td>'.$password.'</td>
         </tr>';
           }
        }
  ?>


  
   <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>-->
  </tbody>
</table>
    </div>



</head>
<body>
    
</body>
</html>