<?PHP
  $user_name="root";
  $password="";
  $database="employee";
  $server="127.0.0.1";
  
  $db_handle=mysqli_connect($server,$user_name,$password);
  $db_found=mysqli_select_db($db_handle,$database);
  

  if ($db_found) {
       $SQL="SELECT * FROM employee_details";
       $result=mysqli_query($db_handle,$SQL);
     
       while($db_field=mysqli_fetch_assoc($result)){
           print $db_field['Id']."<BR>";
           print $db_field['First_name']."<BR>";
           print $db_field['Surname']."<BR>";
           print $db_field['Designation']."<BR>";
       }
       

       $sqla="INSERT INTO employee_details(Id,First_name,Surname,Designation)
       VALUES(2,'Rahul','Jain','Accountant')";
       $result1=mysqli_query($db_handle,$sqla);
       mysqli_close($db_handle);
       print "Record added successfully";


}
else {

print "Database NOT Found ";
mysqli_close($db_handle);

}

?>