<?php

require_once 'connection.php';
require_once 'user.php';
  if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password'])&& !empty($_POST['password'])){
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $user = new User();
    $check =$user->login($email,$password);
    if($check == true){
      session_start();
      $_SESSION["user"]= $_POST['email'];
      ?>
      <script>
        window.alert("Welcome");
        window.location.href = "./index.php";
      </script>
    <?php
    }
    else{
      echo $user->login($email,$password);
    
  }
}
?>