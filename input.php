<?PHP
  $user_name="root";
  $password="";
  $database="employee";
  $server="127.0.0.1";
  
  $db_handle=mysqli_connect($server,$user_name,$password);
  $db_found=mysqli_select_db($db_handle,$database);

  if($db_found){
     $sql="INSERT INTO employee_details(Id,First_name,Surname,Designation)
     VALUES('$_POST[Id]','$_POST[First_name]','$_POST[Surname]','$_POST[Designation]')";
     $result=mysqli_query($db_handle,$sql);
     mysqli_close($db_handle);
     print "Record added successfully";
  
  }
else {

print "Database NOT Found ";
mysqli_close($db_handle);

}
?>