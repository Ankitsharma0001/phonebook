<?php

$connection = mysqli_connect('localhost:3308','root','','phonebook1');
//

if(! $connection ) {
               die('Could not connect: ' . mysql_error());
            }
?>