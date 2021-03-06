﻿<?php require_once("functions/functions.php");;
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <link href="http://fonts.googleapis.com/css?family=Oswald:700|Droid+Serif:400,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="includes/font-awesome/css/font-awesome.min.css">
</head>

<body>
  <?php require_once "view/main_nav.php";
        require_once "view/side_nav.php";
   ?>
  <div class="app-content">
   <div class="mail-toolbar">
    <div class="action-panel-header">
      <a href="">Поща</a>
    </div>
    <div class="filter">
      <button>
        Филтър
        <span>
          <i class="fa-down" aria-hidden="true"></i>
        </span>
      </button>
      <ul class="drop-down-filter">
        <li><a href="#">Последни</a></li>
        <li><a href="#">Статус</a></li>
      </ul>
    </div>
    <div class="delete">
      <a href="#" id="trash">
        <i class="fa fa-trash" aria-hidden="true"></i>
      </a>
      <a href="#" id="exclamation">
        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
      </a>
    </div>
    <a href="javascript:location.reload(true)" class="refresh" >
      <i class="fa fa-refresh" aria-hidden="true"></i>
    </a>
    <div class="pull-right">
      <a href="#" id="angle-l">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
      </a>
      <a href="#" id="angle-r">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <div class="action-panel">
      <div class="list-group">
        <a href="#">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          Входящи
        </a>

        <a href="#">
          <i class="fa fa-bookmark" aria-hidden="true"></i>
          Важни
        </a>
        <a href="#">
          <i class="fa fa-paper-plane" aria-hidden="true"></i>
          Изпратени
        </a>   
        <a href="#">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
          Бележки
        </a>
        <a href="#">
          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
          Спам
        </a>
        <a href="#">
          <i class="fa fa-trash" aria-hidden="true"></i>
          Боклук
        </a>
</div>
      <hr>
      <div class="list-group">
        <h4>Приоритети</h4>
      <a href="#">
        <i class="fa fa-circle" aria-hidden="true" data-color="yellow"></i>
        Лично
      </a>
      <a href="#">
        <i class="fa fa-circle" aria-hidden="true" data-color="blue"></i>
        Работа
      </a>
      <a href="#">
        <i class="fa fa-circle" aria-hidden="true" data-color="red"></i>
        Бизнес
      </a>
      <a href="#">
        <i class="fa fa-circle" aria-hidden="true" data-color="green"></i>
        Клиенти
      </a>
    </div>
      <hr>
      
     <div class="list-group">
      <a href="#">
        <i class="fa fa-gear" aria-hidden="true"></i>
        Настройка
      </a>
    </div>
    </div>
  <div class="clearfix"></div>
  <div class="mail-item">
    <div class="mail-list">
       <div class="mail-container">
         <div class="avatar">
         <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAbjAAAAJGM0MjkxOWY1LWZjNzktNDdjOS1hZmQwLTE3NDA2OGU1ZGZjYg.jpg" alt="" />
       </div>
         <div class="center">
         <div>
           <h4>Проект N:204</h4>
           <a href="#" data-box="green">Клиент</a>
           <a href="#" data-box="blue">Работа</a>
           <!-- Button -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="    height: 20px;
    padding: 0;
    padding-left: 3px;
    padding-right: 3px;">Прочети</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content"> 
    <div class="modal-header"> 
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 
    <h4 class="modal-title" id="mySmallModalLabel">Проект N:204</h4> </div> 
    <div class="modal-body"> Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 Здравей имам въпрос относно проект номер 204 </div> </div>
  </div>
</div>
           <!--END Button -->
         </div>
         <p>Здравей имам въпрос относно проект номер 204
</p>
       </div>
         <div class="right">
         <p>2 hours</p>
         <a href="#" ><i class="fa" data-marked="true"> </i></a>
       </div>
       </div>
     </div>
    <div class="mail-list">
       <div class="mail-container">
         <div class="avatar">
         <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAbjAAAAJGM0MjkxOWY1LWZjNzktNDdjOS1hZmQwLTE3NDA2OGU1ZGZjYg.jpg" alt="" />
       </div>
         <div class="center">
         <div>
           <h4>Account Activity</h4>
           <a href="#" data-box="yellow">Personal</a>
         </div>
         <p>A login activity detected from unusual location. please check this mail
</p>
       </div>
         <div class="right">
         <p>2 hours</p>
         <a href="" ><i class="fa" data-marked="false" aria-hidden="true"></i></a>
       </div>
       </div>
     </div>
    <div class="mail-list">
       <div class="mail-container">
         <div class="avatar">
         <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAbjAAAAJGM0MjkxOWY1LWZjNzktNDdjOS1hZmQwLTE3NDA2OGU1ZGZjYg.jpg" alt="" />
       </div>
         <div class="center">
         <div>
           <h4>Sales Report 2014</h4>
           <a href="#" data-box="blue">work</a>
         </div>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur quo nemo sint, animi sunt alias.
</p>
       </div>
         <div class="right">
         <p>2 hours</p>
         <a href=""><i class="fa" data-marked="false"  aria-hidden="true"></i></a>
       </div>
       </div>
     </div>
    <div class="mail-list">
    <div class="mail-container">
         <div class="avatar">
         <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAbjAAAAJGM0MjkxOWY1LWZjNzktNDdjOS1hZmQwLTE3NDA2OGU1ZGZjYg.jpg" alt="" />
       </div>
         <div class="center">
         <div>
           <h4>Sales Report 2014</h4>
           <a href="#" data-box="red">Busniess</a>
         </div>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nostrum rem, odio. A, mollitia, hic.
</p>
       </div>
         <div class="right">
         <p>2 hours</p>
         <a href=""><i class="fa" data-marked="false" aria-hidden="true"></i></a>
       </div>
       </div>
     </div>
    <div class="mail-list">
       <div class="mail-container">
         <div class="avatar">
         <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAbjAAAAJGM0MjkxOWY1LWZjNzktNDdjOS1hZmQwLTE3NDA2OGU1ZGZjYg.jpg" alt="" />
       </div>
         <div class="center">
         <div>
           <h4>Sales Report 2014</h4>
           <a href="#" data-box="yellow">Personal</a>
         </div>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum maxime, quas consecteturx fugiat sapiente cupiditate!
</p>
       </div>
         <div class="right">
         <p>2 hours</p>
         <a href=""><i class="fa" data-marked="true" aria-hidden="true"></i></a>
       </div>
       </div>
     </div>
    <div class="mail-list">
    <div class="mail-container">
         <div class="avatar">
         <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAbjAAAAJGM0MjkxOWY1LWZjNzktNDdjOS1hZmQwLTE3NDA2OGU1ZGZjYg.jpg" alt="" />
       </div>
         <div class="center">
         <div>
           <h4>Sales Report 2014</h4>
           <a href="#" data-box="green">Client</a>
         </div>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis beatae, quo molestias? Quo iusto, facere!
</p>
       </div>
         <div class="right">
         <p>2 hours</p>
         <a href=""><i class="fa" data-marked="true" aria-hidden="true"></i></a>
       </div>
       </div>
     </div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>

      <script src="includes/js/index.js"></script>
      <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


       
  
</body>
</html>
