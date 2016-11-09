<?php require_once("functions/functions.php");

    // Log out
    if(isset($_GET['action'])){
        if($_GET['action'] == 'logout'){
            logout();
        }
    }

    // Add new user
    if(isset($_POST['add_user'])){
        add_user();
    }

    // Edit user
    if(isset($_POST['edit_profile'])){
        edit_profile();
    }

    // Add new category to the side menu
    if(isset($_POST['add_sidebar_folder'])){
        add_sidemenu_folder();
    }

    // Edit category from the side menu
    if(isset($_POST['edit_sidebar_folder'])){
        edit_sidemenu_folder();
    }

    // Delete side menu folder
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        delete_sidemenu_folder();
    }
    // Delete storage folder
    if(isset($_GET['action']) && $_GET['action'] == 'fdelete'){
        delete_folder();
    }elseif(isset($_GET['action']) && $_GET['action'] == 'fldelete'){
        delete_file();
    }
    // Delete current avatar
    elseif(isset($_GET['action']) && $_GET['action'] == 'remove_avatar'){
        remove_avatar();
    }

    // Back a directory 
    if(isset($_GET['action']) && $_GET['action'] == "back"){
        back_a_directory();
    }
 
?>





<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Начало</title> 
  <link rel="stylesheet" href="includes/css/style.css">
  <link rel="stylesheet" href="includes/css/users-style.css">
    <link rel="stylesheet" href="includes/css/users-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css'>
  <link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="includes/css/font-awesome.min.css">

  
</head>

<body>

  <?php require_once "main_nav.php";
        require_once "side_nav.php";
   ?>

<div class='wrapper-2'>
  <?php 
      if(isset($_GET['action']) && isset($_GET['type'])){
          if($_GET['type'] == 'admin' && $_GET['action'] == 'add_sidebar_folder'){
             require_once('view/add_sidebar_folder.html');
          }
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "edit"){
          require_once('view/edit_sidebar_folder.php');
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "add_user"){
          require_once('view/add_user.php');
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "display_users"){
          require_once('view/all_users_table.php');
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "display_profile"){
          require_once('view/profile.php');
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "edit_profile"){
          require_once('view/edit_profile.php');
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "edit_password"){
          require_once('view/edit_password.php');
      }
      elseif(isset($_GET['action']) && $_GET['action'] == "messages"){
          require_once('view/messages.php');
      }
      elseif(isset($_GET['name']) && isset($_GET['action']) && $_GET['action'] == "open"){
          require_once('view/storage.php');
      }elseif(isset($_GET['name']) && isset($_GET['action']) && $_GET['action'] == "fopen"){
          open_file();
      }

      
      

  ?>
























































 <!-- <a class="asd"  href="Meetings/index.html" onClick="return popup(this, 'notes')">
  <label for='1'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Иван Димитров</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
   </a>

     <a href="#">
  <label for='2'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Георги Фазанов</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
  </a>
  <a href="#">
  <label for='3'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Иван Маринов</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
  </a>
  <a href="#">
  <label for='4'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Гергана Михайлова</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
  </a>
  <a href="#">
  <label for='5'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Click me</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
    </label>
    </a>
    <a href="#">
  <label for='6'>
  <div>
    <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Click me</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
  </a>
  <a href="#">
  <label for='7'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Click me</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
  </a>
  <a href="#">
  <label for='8'>
    <div>
      <i class="fa fa-drupal fa-4x circle" aria-hidden="true"></i>
      <span style="display: block;">Click me</span>
    </div>
    <p>Congrats, you managed to click the box! Thanks for checking out this pen. Take a look at some of my other stuff too.</p>
  </label>
  </a> -->
  
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
 function popup(mylink, windowname) { 
    if (! window.focus)return true;
    var href;
    if (typeof(mylink) == 'string') href=mylink;
    else href=mylink.href; 
    window.open(href, windowname, 'width=900,height=500,scrollbars=yes,toolbar=no'); 
    return false; 
  }
</script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>

      <script src="includes/js/index.js"></script>
      <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
</body>
</html>
