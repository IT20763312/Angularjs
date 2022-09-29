 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "angularjs_tutorial");  
 
 $data = json_decode(file_get_contents("php://input"));  
 
 if(count(array($data)) > 0)  
 
 {  
      $name_received = mysqli_real_escape_string($connect, $data->send_name);       
      $address_received = mysqli_real_escape_string($connect, $data->send_address);
      $mobile_received = mysqli_real_escape_string($connect, $data->send_mobile);
      $btnname_received = mysqli_real_escape_string($connect, $data->send_btnName);
     
   
	  if($btnname_received == 'ADD'){
      $query = "INSERT INTO students(name, address, mobile) VALUES ('$name_received', '$address_received','$mobile_received')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
     }



     if($btnname_received == 'Update'){
          $id_received = mysqli_real_escape_string($connect, $data->send_id);

          $query = "UPDATE students SET name = '$name_received', address = '$address_received', mobile = '$mobile_received' WHERE id = '$id_received'";  

  
          if(mysqli_query($connect, $query))  
          {  
               echo 'Data Updated...';  
          }  
          else  
          {  
               echo 'Error';  
          }  
     }




 }  
 ?>  
