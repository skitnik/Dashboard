<?php require_once("functions/functions.php");

    // Log out
    if(isset($_GET['action'])){
        if($_GET['action'] == 'logout'){
            session_destroy();
            header('Location:index.php');
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
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="includes/css/bootstrap.min.css"/>
        <link href="includes/css/dashboard.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="includes/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="includes/css/custom.css">
        <meta charset="UTF-8">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Здравей <?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="#">Срещи</a></li>
                        <li><a href="index.php?action=display_users">Всички потребители</a></li>
                        <li><a href="index.php?action=add_user">Добавяне на потребители</a></li>
                        <li><a href="index.php?action=messages">Съобщения</a></li>
                        <li><a href="index.php?action=display_profile">Профил</a></li>
                        <li><a href="index.php?type=user&action=logout">Излез</a></li>
                    </ul>
                    <!-- <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form> -->
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class"nav nav-sidebar">
                        <?php
                                // $access = $_GET['level'];
                                
                                $sidebar_folders = display_files('storage');
                                foreach ($sidebar_folders['dirs'] as $folder) {
                                    echo "<li><a href='index.php?name=".$folder."&action=open' class='sidebar-folder'>". $folder ."</a>
                                    <a href='index.php?name=".$folder."&action=edit' class='sidebar-edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                                    <a href='index.php?name=".$folder."&action=delete' class='sidebar-delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a></li>";
                                }
                         ?>
                        <li><a href="index.php?type=admin&action=add_sidebar_folder" id="add_sidebar_folder">Добавяне на папка</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
                    <!-- <div class="table-responsive">
                        <table class="table table-striped">
                            
                        </table>
                    </div> -->
                </div>
            </div>
        </div>
        <script src="includes/js/bootstrap.min.js"></script>
    </body>
</html>
