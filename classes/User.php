<?php
  require_once("db.php");
  
  class User extends Db{
    private $conn;
    
    public function __construct(){
       $this->conn = $this->connect();
    }




    
     

    
    
    public function insertData($parent_name, $parent_email, $parent_password)
{
    // Check if email exists in the database before trying to insert into the parent table
    $sql = "SELECT COUNT(*) FROM parent WHERE parent_email = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$parent_email]);
    $numUsers = $stmt->fetchColumn();

    if ($numUsers > 0) {
        return "Error: This email is already in use";
    }

    // Email does not exist, now insert into the parent table
    $sql = "INSERT INTO parent (parent_name, parent_email, parent_password) VALUES (?, ?, ?)";
    $stmt = $this->conn->prepare($sql);

    if ($stmt->execute([$parent_name, $parent_email, $parent_password])) {
        return "Data inserted successfully";
    }

    return "Error: Failed to insert data";
}

        
       

    


   //  public function loginUser($email, $password){
   //     //check if email in db before trying to insert into user table 
   //     $sql= "SELECT * FROM users WHERE user_email=?";
   //     $stmt= $this->conn->prepare($sql);
   //     $userexist=$stmt->execute([$email]);
   //     $numUsers=$stmt->rowCount();
   //     if($numUsers >1){
   //         return "Error Username or Password is not correct";
   //         exit();
   //         //you do the above to the unique keys
   //     }
   //     $user = $stmt->fetch(PDO::FETCH_ASSOC);
   //       $user["user_password"];
   //       if(password_verify($password, $user["user_password"])){
   //          // return "you are logged in";
           
   //         session_start();
   //         $_SESSION["user_id"] = $user["user_id"];
   //         $_SESSION["user_role"] = $user["user_role"];
   //       //   $_SESSION["user_fullname"] = $user["user_fullname"];
   //       //   $_SESSION["user_email"] = $user["user_email"];
   //       //   $_SESSION["user_Intro"] = $user["user_Intro"];
   //       //   $_SESSION["user_dp"] = $user["user_dp"];
   //       //   $_SESSION["user_created"] = $user["user_created"];

   //         if($user["user_role"] === "user"){
   //           header("location:../profile.php");
   //           exit();
   //         }else if($user["user_role"] === "admin"){
   //           header("location:../admin_profile.php");
   //           exit();
   //         }else{
   //           session_destroy();
   //           header("location:../register.php");
   //           exit();
   //         }


           
           
           
   //          exit();
   //       }
     
   //       return "Either Username or password is in correct";
   //          exit();
    
    
   //  }



   //  public function updatePassword($user_id, $oldpassword, $newpassword){
   //      //getting a user that i want to update the password
   //       $sql = "SELECT * FROM users WHERE user_id = ?";
   //       $stmt = $this->conn->prepare($sql);
   //       $stmt->execute([$user_id]);
   //       $user = $stmt->fetch(PDO::FETCH_ASSOC);

   //       //checking if the password they provided matches with password stored for them in db
   //       if(password_verify($oldpassword, $user["user_password"])){
             
   //          $sql= "UPDATE users SET user_password = ? WHERE user_id = ?";
   //          $stmt = $this->conn->prepare($sql);
   //          $updatedUser= $stmt->execute([$newpassword, $user_id]);
   //          return $updatedUser;

   //       }

   //     return "old password is incorrect";


   //  }


   //  //method to get user details using the id
   //  public function getUserDetails($user_id){
   //     $sql= "SELECT * FROM users WHERE user_id =?";
   //     $stmt = $this->conn->prepare($sql);
   //     $stmt->execute([$user_id]);
   //     $user = $stmt->fetch(PDO::FETCH_ASSOC);
   //     return $user;
   //  }

    
   //  public function updateProfile($user_id, $user_fullname, $user_intro){
   //    $sql= "UPDATE users SET user_fullname=?, user_intro=? WHERE user_id=?";
   //    $stmt= $this->conn->prepare($sql);
   //    $response = $stmt->execute([$user_id, $user_fullname, $user_intro]);
   //    return $response;
   //  }
   
   
   }


$userone = new User();
$result =$userone->insertData("bright 00", "bright@gmail.com", "password123");
echo "<pre>";
print_r($result);
echo "</pre>"
        // echo  $userone->registerUser("bright 00", "bright@gmail.com", "password123", "im a man of my word");
        //    print_r($userone->loginUser( "bright@gmail.com", "password123"));
        // print_r($userone->updatePassword(16, "password123", "password1234"));

?>