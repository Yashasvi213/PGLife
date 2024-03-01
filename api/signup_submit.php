<?php
   require("../includes/database_connect.php");

     
   $name=$_POST['name'];
   $phoneno=$_POST['phoneno'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $college=$_POST['college'];

   $sql="SELECT* FROM users WHERE email='$email'";
   $result=mysqli_query($conn,$sql);
   if(!$result){
      echo"something went wrong";
      exit;
   }

   $row_count=mysqli_num_rows($result);
   if(!$row_count !=0){
      echo "you are already regidtered";
   }


   $sql="INSERT INTO users(name,phoneno,email,password,college) VALUES('$name','$phoneno','$email','$password','$college')";
   $result=mysqli_query($conn,$sql);
   if(!$result){
      echo "error";
      exit;
   }

   echo"registration successfull";

?>
Click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);