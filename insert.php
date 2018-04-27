<?php

$servername="localhost";
$username="root";
$password="";
 $db="glass";                                  
                                   


                                   $conn = new mysqli($servername,$username, $password,$db);

                                   if($conn->connect_error){
                                    die ("Connection failed".$conn->connect_error);
                                   }

                                    if(isset($_POST['Submit'])){
                                      $firstname= $_POST['firstname'];
                                      $lastname= $_POST['lastname'];
                                      $Email= $_POST['Email'];
                                      $phone= $_POST['phone'];
                                      $message= $_POST['message'];

  if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['Email']) && isset($_POST['phone']) && isset($_POST['message'])){

                   
       if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['Email']) && !empty($_POST['phone']) && !empty($_POST['message'])){


       $query = "INSERT INTO experts(firstname,lastname,Email,phone,message) VALUE('$firstname','$lastname','$Email ','$phone','$message ')";

                      if(mysqli_query($conn,$query) === true){

                  
                   echo "<script type='text/javascript'>alert('New record successfuly created.');</script>";
   
                     header("Location:index.php");
                 
                 
                    
               }
               else{
               echo "<script type='text/javascript'>alert('Eror!');</script>";
               }

             }
             else{
                echo "<script type='text/javascript'>alert('All parameters must to filled in.');</script>";
             }

           }
           else{
              echo "<script type='text/javascript'>alert('All parameter must be sent.');</script>";
           }
         }
ob_end_flush();
?>