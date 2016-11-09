<?php require_once("functions/functions.php");;
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
    
  <div class="form-wrapper cf">
    <div class="section-1 six col">
      <div class="icon">
        <label for="file-input">
        <img src="includes/images/user.png" class="user-img-reg-form">
        </label>
      </div>
      <h1>Добавяне на нов акаунт</h1>
      <br>
      <p class="add-img">Моля добавете снимка и изберете пита на акаунта.</p>
      <br>
    </div>
    
    <div class="section-2 six col">
      <form class="form" method="POST">
        <input type="text" id="username" name="username" placeholder="Потребителско име">
        <input type="email" id="email" name="email" placeholder="Имейл адрес">
        <input type="password" id="password" name="password" placeholder="Парола">
        <div id="level">
          <div class="level-types">
            <input type="radio" name="level" value="3">Администратор</input>
          </div>
          <div class="level-types">
             <input type="radio" name="level" value="2">Търговец</input>
          </div>
          <div class="level-types">
            <input type="radio" name="level" value="1" checked="checked">Клиент</input>
          </div>
        </div>
        <input type="submit" class="submit" name="add_user" value="Добави">
      </form>
    </div>
  </div>
  <!-- $('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
}); -->
  
</body>
</html>
