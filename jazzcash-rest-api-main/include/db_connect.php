<?php 

 
 
// Connect with the database 
$db = mysqli_connect ("localhost", "root", "") or die ('Unable to connect');
mysqli_select_db ($db,'jazzcash_db');


 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}