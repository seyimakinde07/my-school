<?php
   require_once("../classes/User.php");
   if($_POST){
   if(isset($_POST["register"])){
      $parent_name= $_POST["fullname"];
      $parent_email= $_POST["email"];
      $parent_password= $_POST["password"];
      $confirm_password= $_POST["confirm_password"];
    

      //validate empty fields
       if(empty($parent_name) || empty($parent_email) || empty($parent_password) || empty($confirm_password)){
           echo "All Fields required";
           exit;
       }
       
      //validate password length
      if(strlen($parent_password) < 8){
         echo "Minimum length for password is eight characters";
         exit;
      } 


      if($password !== $confirmpassword){
          echo "password and confirm password must be the same";
          exit;
      }
       //hash the password
     $password = password_hash($parent_password, PASSWORD_DEFAULT);
      //  echo $password;
      
       //instantiate the class and call the register method
      $userone = new User();
      $response =$userone->createUser($parent_name, $parent_email, $parent_password,);
        echo $response;
   }

}

$userone = new User();
$result =$userone->createUser("dele mohamed","dele@gmail.com","password123");
 echo "<pre>";
 print_r($result);
echo "</pre>"




?>