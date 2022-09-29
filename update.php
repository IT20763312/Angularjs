<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "angularjs_tutorial");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
    $id_received = mysqli_real_escape_string($connect, $data->id_for_update);
      $name_received = mysqli_real_escape_string($connect, $data->name_for_update);       
      $address_received = mysqli_real_escape_string($connect, $data->address_for_update);
      $mobile_received = mysqli_real_escape_string($connect, $data->mobile_for_update);

      $query = "UPDATE students SET name = '$name_received', address = '$address_received', mobile = '$mobile_received' WHERE id = '$id_received'";  

  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Updated...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  
