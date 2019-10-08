<?php
   $host = 'db'; //service name from docker-compose.yml
   $user = 'devuser';
   $password = 'devpass';
   $db = 'test_database';
 
   $conn = new mysqli($host,$user,$password,$db);
   if ($conn->connect_error){
     echo "Unable To Connect With Database".$conn->connect_error;
     exit;
   }
   echo "Successfully Connected To MySQL Database";
                                                                                                                     
   echo "Changes are effecting ....";
	 echo "<br/>";
	 echo "Hello World!"
?>

