<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phone Book</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="https://kit.fontawesome.com/70f8f15868.js" crossorigin="anonymous"></script>

</head>

<body>

   <div class="container-fluid">
     <div class="row">
        <div class="col-12">

      <center>
      <div class="col-10">
        <div id="box">
          <div id="sitename"> 
            <h2>RM-Phonebook</h2>
          </div>

       
         <div class="col-8"> 
          <div id="addContacts">
           <h5><a href="home.php"><i class="fas fa-arrow-left"></i></a> Add New Contacts</h5>       
        
<!--        ////////////////////////  add   /////////////////////////////-->
        <?php
          if(isset($_POST['save'])){

             $n = $_POST['n'];
             $dob = $_POST['dob'];
             $mob = $_POST['mob'];
             $e = $_POST['e'];
          

           
                
                $query  =  "INSERT INTO contacts(name, dob, phone, email)";
                $query .= " VALUES ('$n', '$dob', '$mob', '$e') ";
                
                $add_contacts_query = mysqli_query($connection, $query);
                
                if(!$add_contacts_query){

                    die('QUERY FAILED'. mysqli_error($connection));
                }
                else{
                    echo "<h4>Added Sucessfully</h4>";
                }
              
             }else {
                 
            }
                        
         ?>



         <form method="post" action="" id="formAdd">

          <div class="form-group">
            <label class="fielda" for="n">Name</label><br>
            <input type="text" class="form-group" name="n" id="n1" placeholder="enter your name" required/>
          
            <label class="fielda" for="dob">DOB</label><br>
            <input type="date" class="form-group" name="dob" id="dob1" placeholder="dd/mm/yyyy" />
          
            <label class="fielda" for="mob">Mobile Number</label><br>
            <input type="text" pattern="[0-9]*" class="form-group" name="mob" id="mob1" placeholder="+91 XXXXXXXXXX" required/>
          
            <label class="fielda" for="e">Email</label><br>
            <input type="email" class="form-group" name="e" id="e1" placeholder="abc@gmail.com"/>
          </div>
      
           <input type="submit" class="btn btn-success" name="save" value="Save">           

        </form>

        
         </div>
        </div>
<!--   add contacts form end  -->

     </div>
     </div>
     </center>


     </div>
    </div>  
   </div>
  

</body>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>


<!--
  </tr>
    <td>Enter your Mobile</td>
    <td><input type="text" pattern="[0-9]*" name="m" /></td>
  </tr>
-->