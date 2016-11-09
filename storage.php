<?php 
	require_once("functions/functions.php");
	session_start();

	// Download Files
	if(isset($_GET['name']) && isset($_GET['action']) && $_GET['action'] === "fopen"){
		download_file();
	}

	// Back a directory
	if(isset($_GET['name']) && isset($_GET['action']) && $_GET['action'] === "back"){
		back_a_directory();
	}

	// Delete File
	if(isset($_GET['name']) && isset($_GET['action']) && $_GET['action'] === "fldelete"){
		delete_file();
	}

	// Delete Folder
	if(isset($_GET['name']) && isset($_GET['action']) && $_GET['action'] === "fdelete"){
		delete_folder();
	}
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
<?php
	require_once "view/main_nav.php";
    require_once "view/side_nav.php";
?>
<div id="storage">
	<ul>
		<?php 
			$files = display_files('storage');
			if(isset($_GET['name'])){
				$path = $_GET['name'];

			  $checkPath = explode('/', $path); 

			  if(in_array('storage', $checkPath)){
			    $path = $_GET['name'];
			  }else{
			    $path = "storage/".$_GET['name'];
			  }
			  
			  echo "<a href='storage.php?name=". $path . "&action=back' class='back-arrow'><i class='fa fa-arrow-left' aria-hidden='true'></i></a>";

			  $folder_content = display_files($path);
			  foreach($folder_content['dirs'] as $folder){
			    echo "<li><i class='fa fa-folder' aria-hidden='true'></i><a href='storage.php?name=". $path . "/". $folder . "&action=open'>" . $folder . "</a>
			    <a href='storage.php?name=". $path . "/". $folder ."&action=fdelete' class='sidebar-delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
			    </li>";
			  }

			  foreach($folder_content['files'] as $file){
			    echo "<li>
			            <i class='fa fa-file' aria-hidden='true'></i><a href='storage.php?name=". $path . "/". $file . "&action=fopen'>" . $file . "</a>
			            <a href='storage.php?name=". $path . "/". $file ."&action=fldelete' class='sidebar-delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a>
			          </li>";
			  }

			}else{
				foreach ($files['dirs'] as $file) {
				    echo "<li><a href='storage.php?name=".$file."&action=open' class='sidebar-folder'>". $file ."</a>
				    <a href='storage.php?name=".$file."&action=edit' class='sidebar-edit'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
				    <a href='storage.php?name=".$file."&action=delete' class='sidebar-delete'><i class='fa fa-trash-o' aria-hidden='true'></i></a></li>";
				}
			}
		    
		?>
		<li><a href="index.php?type=admin&action=add_sidebar_folder" id="add_sidebar_folder">Добавяне на папка</a></li>
	</ul>
</div>














</body>