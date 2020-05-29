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
       <div class="col-md-8 mb-4">

        <div class="input-group">
                <input class="form-control border-secondary py-2" type="search" value="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                       <i class="fa fa-search" aria-hidden="true"></i>

                    </button>
                </div>
        </div>
        </div>


<!--   ////////////////////////////////////////     Show Contacts     //////////////////////////////////    -->

     
       <table class="table table-hover tablem">
    <thead>
    </thead>
    <tbody>
        
        <?php  // Find all categories
                    
          $query = "SELECT * FROM contacts";
          $select_contacts = mysqli_query($connection,$query);  
                    
          while($row = mysqli_fetch_assoc($select_contacts)) {
            $n = $row['name'];
            $dob = $row['dob'];
            $mob = $row['phone'];
            $e = $row['email'];
              
              
            //echo "{$n}";
              
         echo "<tr>";    
         echo "<td>{$n}</td>";
         echo "</tr>";

         // echo "<tr>";
         // echo "<td>{$dob}</td>";
         // echo "/tr";

         // echo "<tr>";
         // echo "<td>{$mob}</td>";
         // echo "<td>{$e}</td>";
           
        // echo "<td><a class='btn btn-danger' role='button' href='manage_products.php?delete={$pro_id}'>Delete</a></td>";      
         //echo "<td><a class='btn btn-primary' role='button' href='update_products.php?edit={$pro_id}'>Edit</a></td>";      
         echo "</tr>";    
        
        }
     ?> 

        
       </tbody>
       </table>


         <!--  accordian end-->

         <div id="addButton">
         	<a href="add.php"  style="font-size: 50px;" > <i class="fas fa-plus-circle"></i></a>
         	
         </div>

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

            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title">
                  Item 2
                </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt 
                </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">
                  Item 3
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion" >
                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry 
                </div>
            </div> -->