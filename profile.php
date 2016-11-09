<?php require_once("functions/functions.php");
      session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Nav-Metro-Responsive</title>
  
      <link rel="stylesheet" href="includes/css/style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css'>
        <link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">

  
</head>

<body>

<?php require_once "view/main_nav.php";
      require_once "view/side_nav.php";
?>

<section class="profilebox">
    <aside>
       <?php
         if(file_exists(dirname("includes/users_avatar/" . $_SESSION['id'] . ".jpg/'"))){

             echo "<img class='profpic' alt='profile picture' src='includes/users_avatar/" . $_SESSION['id'] . ".jpg'>";
         }
        else{
             echo "<img class='profpic' src='includes/users_avatar/gravatar.jpg' alt='profile picture'>" ;
         }
       ?> 
      <!-- <img class="profpic" src="css/DSC_7207.png" alt="profile picture" /> -->
      <button class="prof-close" type="button">&times;</button>
    </aside>
    <header>
      <h1 class="prof-name"><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></h1>
      <h4 class="prof-user"><?php echo $_SESSION['email']; ?></h4>
    </header>
    <main class="user-desc">
    <br>
      <p>
        <!-- <i class="fa fa-male" aria-hidden="true"></i><span> Иван Маринов</span><br><br> -->
        <i class="fa fa-heartbeat" aria-hidden="true"></i><span> 28 години</span><br><br>
        <i class="fa fa-map-marker" aria-hidden="true"></i><span> бул. "България" № 2</span><br><br>
        <i class="fa fa-user" aria-hidden="true"></i>
        <?php 
        if($_SESSION['level'] == '3'){
          echo "<span> Администратор</span>";
        } elseif($_SESSION['level'] == '2'){
          echo "<span> Търговец</span>";
        } else{
           echo "<span> Клиент</span>";
        }
        ?>


        <p data-title="Info Dialog" class="dialog-box_info">
          <em>Note:</em> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla commodi tempore voluptatem earum modi suscipit ipsa aspernatur autem amet harum unde assumenda nisi ex consequatur similique cupiditate facere ut nihil velit quos perspiciatis. Repudiandae neque vel aliquam odio doloribus labore.
      </p>
      </p>
    </main>
  </section>

  
</body>
</html>
