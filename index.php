<?php
  session_start();
  require_once("functions/functions.php");
  if(isset($_GET['action'])){
        if($_GET['action'] == 'logout'){
            logout();
        }
    }else{
      if(isset($_SESSION['loggedIn'])){
          if($_SESSION['loggedIn'] == true){
            // require_once("view/dashboard_index.php");
            header('Location:users.php');
          }
        }else{
          require_once("view/login_form.html");
           if(isset($_POST['login'])){
              check_login();
           }
        }
    }

  
  
 

?>

