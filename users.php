<?php require_once("functions/functions.php");
      session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Nav-Metro-Responsive</title>
  
  <link rel="stylesheet" href="includes/css/style.css">
  <link rel="stylesheet" href="includes/css/users-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css'>
  <link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">

  
</head>

<body>

<?php require_once "view/main_nav.php";
        require_once "view/side_nav.php";
   ?>
<div class="container">

  <div class="list-group">
    <ul>
      <?php 
    $users = display_all_users();
    foreach($users as $user){
      echo '<li><a>';
        if(file_exists("includes/users_avatar/". $user['id'] .".jpg")){
          echo '<div class="picture"><img src="includes/users_avatar/'. $user['id'] .'.jpg"/>';
        }else{
          echo '<div class="picture"><img src="includes/users_avatar/gravatar.jpg"/>';
        }
        // Check if user is online
        if($user['logged_in'] === '1'){
          echo "<div class='badge green'><i class='fa fa-check'></i></div>";
        }else{
          echo "<div class='badge red'><i class='fa fa-times'></i></div>";
        }
        echo '</div>';
        echo '<div class="content">';
          echo "<div class='title'>";
        // Check if user has first and last name
        if(strlen($user['first_name']) !== 0 && strlen($user['last_name']) !== 0){
          echo $user['first_name'] . " " . $user['last_name'];
        }else{
          echo $user['username'];
        }
        echo "</div>";
          echo '<div class="description">';
            // echo '<div class="location"><i class="fa fa-map-marker"></i><span>София, България</span></div>';
            echo '<div class="tags">';
              if($user['level'] === '3'){
                echo '<div class="tag orange">Aдминистратор</div>';
              }elseif($user['level'] === '2'){
                echo '<div class="tag orange">Търговец</div>';
              }else{
                echo '<div class="tag orange">Клиент</div>';
              }
            echo '</div>';
          echo '</div>';
        echo '</div>';
        echo '<div class="footer">';
          if($user['logged_in'] === '1'){
            echo '<div class="info left"><i class="fa fa-clock-o"></i><span class="info-log">Постедно влизане: online</span></div>';
          }else{
            echo '<div class="info left"><i class="fa fa-clock-o"></i><span class="info-log">Постедно влизане: ' . $user['last_login'] .'</span></div>';
          }
        echo '</div>';
        echo '<div class="functions">';
          echo '<div class="func"><i class="fa fa-envelope"></i></div>';
          echo '<div class="func"><i class="fa fa-trash"></i></div>';
        echo '</div>';
      echo '</a></li>';
    }

    ?>
    </ul>
  </div>
  <div class="content">
    <div class="profile">
      <div class="picture"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/peterlandt/128.jpg"/>
        <div class="badge green"><i class="fa fa-check"></i></div>
      </div>
      <div class="details">
        <div class="tags">
          <div class="tag orange">Системен администратор</div>
          <div class="tag green">На линия</div>
        </div>
        <div class="title">Иван Димитров</div>
        <div class="titulus">Branch administrator</div>
        <div class="description">
          <div class="info-row"><i class="fa fa-map-marker"></i><span class="caption">Живее:</span><span class="value">София,България</span></div>
          <div class="info-row"><i class="fa fa-clock-o"></i><span class="caption">Последно:</span><span class="value">На линия</span></div>
          <div class="info-row"><i class="fa fa-calendar"></i><span class="caption">Създаден:</span><span class="value">Преди 3 дни        </span></div>
        </div>
      </div>
      <div class="functions">
        <div class="func"><i class="fa fa-envelope"></i></div>
        <div class="func"><i class="fa fa-comments"></i></div>
        <div class="func"><i class="fa fa-edit"></i></div>
        <div class="func"><i class="fa fa-flag"></i></div>
        <div class="func"><i class="fa fa-share-alt"></i></div>
        <div class="func"><i class="fa fa-trash"></i></div>
      </div>
      <hr/>
      <div class="further">
        <div class="info-row">
          <div class="info-block"><i class="fa fa-home"></i><span class="value">+358 892 444 875</span></div>
          <div class="info-block"><i class="fa fa-globe"></i><span class="value">http://ivandimitrov.com</span></div>
        </div>
        <div class="info-row">
          <div class="info-block"><i class="fa fa-phone"></i><span class="value">+359 953 567 321</span></div>
          <div class="info-block"><i class="fa fa-envelope"></i><span class="value">ivandimitrov@gmail.com</span></div>
        </div>
      </div>
      <div class="further">
        <div class="info-row">
          <div class="info-block"><i class="fa fa-twitter"></i><span class="value">@ivandimitrov</span></div>
          <div class="info-block"><i class="fa fa-google-plus"></i><span class="value">google.com/ivandimitrov</span></div>
        </div>
        <div class="info-row">
          <div class="info-block"><i class="fa fa-facebook"></i><span class="value">fb.com/ivandimitrov</span></div>
          <div class="info-block"><i class="fa fa-youtube"></i><span class="value">youtube.com/ivandimitrov</span></div>
        </div>
      </div>
      <hr/>
      <div class="logs">
        <div class="title">Last events</div>
        <table>
          <tr>
            <td>2016-01-06</td>
            <td>Logged in.</td>
          </tr>
          <tr>
            <td>2016-01-05</td>
            <td>Logged out.</td>
          </tr>
          <tr>
            <td>2016-01-05</td>
            <td>
               
              New user <a href="#">Григор Малазов</a> added.
            </td>
          </tr>
          <tr>
            <td>2016-01-05</td>
            <td>Logged in.</td>
          </tr>
          <tr>
            <td>2016-01-04</td>
            <td>Logged out.</td>
          </tr>
          <tr>
            <td>2016-01-05</td>
            <td>
               
              Changed status of  <a href="#">Григор Малазов</a> to inactive.
            </td>
          </tr>
          <tr>
            <td>2016-01-04</td>
            <td>Logged in.</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

  
</body>
</html>
