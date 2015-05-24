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
           print "Id:".$db_field['Id']."&nbsp"."First Name:".$db_field['First_name']."   "."Surname:".$db_field['Surname']." "."Designation:".$db_field['Designation']."<BR>";
           
       
}
}
else {

print "Database NOT Found ";
mysqli_close($db_handle);

}

?>