<?PHP
  $user_name="root";
  $password="";
  $database="employee";
  $server="127.0.0.1";

  $id=$_POST['Id'];
  $db_handle=mysqli_connect($server,$user_name,$password);
  $db_found=mysqli_select_db($db_handle,$database);
  
  if($db_found){
     $SQL="SELECT * FROM employee_details WHERE Id=$_POST[Id]";
     $result=mysqli_query($db_handle,$SQL);
     $rows=array();
       while($db_field=mysqli_fetch_assoc($result)){
     
          $rows['Id']=$db_field;
           
       }
      print json_encode($rows);
     $des="SELECT Designation FROM employee_details WHERE Id=$_POST[Id]";
     $result1=mysqli_query($db_handle,$des);
     while($db_field1=mysqli_fetch_assoc($result1)){
        $a=$db_field1['Designation'];
      }
     $sal="SELECT Salary FROM Designation WHERE Designation='$a'";
     $result2=mysqli_query($db_handle,$sal);

     
      while($db_field2=mysqli_fetch_assoc($result2)){ 
           print "Salary:".$db_field2['Salary'];
        
     }

     
     
    
  }
  else {

print "Database NOT Found ";
mysqli_close($db_handle);

}

?>