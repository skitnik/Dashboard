<!--  <div class="container" id="messages">
  <h2 style="text-align: center">Съобщения</h2>
  <a href="index.php?action=messages&create=new" class="btn btn-info">Изпрати съобщение</a>
  <div class="row">

  <?php
    // Send new message 
  if(isset($_POST['send'])){
      send_message();
    }


  if(isset($_GET['action']) && $_GET['action'] === "messages" && isset($_GET['delete'])){
      delete_message();
    }



    if(isset($_GET['id'])){
              require_once('view/message_body.php');
    }
    elseif(isset($_GET['create']) && $_GET['create'] === "new"){
              require_once('view/new_message_form.php');
    }
    else{
        $messages = display_messages();
        echo "<ul>";
        foreach($messages as $message){
          echo "<li><a href='index.php?action=messages&id=" . $message['id'] . "'>" . $message['title'] . "</a></li>
                <a href='index.php?action=messages&delete=" . $message['id'] . "' class='sidebar-delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>";
        }
        echo "</ul>";
    }

   ?>
  </div>
</div> -->
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
  
