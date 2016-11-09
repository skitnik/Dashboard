<?php 

// Connect to the Database
function db_connect(){
	return $dbh = new PDO('mysql:host=localhost;dbname=img_dashboard', "root", "" );
}

// Get user info via username
function get_login_info($username){
	$dbh = db_connect();
	$query = $dbh->query("SELECT * FROM users WHERE username = '$username' ");
	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result;
}

// Get user info by email
 function user_info_by_email($email){
	$dbh = db_connect();
	$query = $dbh->query("SELECT * FROM users WHERE email = '$email' ");
	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result;
}

// Check the login
function check_login(){
	$loginDetails = get_login_info($_POST['username']);
	if($loginDetails['username'] == $_POST['username'] && password_verify($_POST['password'] ,$loginDetails['password'])){
		$_SESSION['id'] = $loginDetails['id'];
		$_SESSION['username'] = $loginDetails['username'];
		$_SESSION['first_name'] = $loginDetails['first_name'];
		$_SESSION['last_name'] = $loginDetails['last_name'];
		$_SESSION['email'] = $loginDetails['email'];
		$_SESSION['level'] = $loginDetails['level'];
		$_SESSION['loggedIn'] = true;
		$userId = $_SESSION['id'];
		$dbh = db_connect();
		$query = $dbh->query("UPDATE users SET last_login = CURRENT_TIMESTAMP, logged_in = '1' WHERE id = '$userId' ");

		header('Location:index.php');
		exit();
	}else{
		echo "Wrong Login";
	}
}

function logout(){
	$userId = $_SESSION['id'];
	$dbh = db_connect();
	$query = $dbh->query("UPDATE users SET logged_in = '0' WHERE id = '$userId' ");
	session_destroy();
    header('Location:index.php');
}

// Display all users
function display_all_users(){
	$all_users = [];
	$dbh = db_connect();
	$query = $dbh->query("SELECT * FROM users");
	while($result = $query->fetch(PDO::FETCH_ASSOC)){
		 $all_users[] = $result;
	}
	return $all_users;
}

// Add user
function add_user(){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashPassword = password_hash($password, PASSWORD_DEFAULT);
	$email = $_POST['email'];
	$level = $_POST['level'];
	if(check_if_email_exists($email) === true){
		$dbh = db_connect();
		$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
		$query = $dbh->query("INSERT INTO users (username, email, level, password) VALUES ('$username','$email','$level','$hashPassword')");
		header('Location:index.php?action=display_users');
	}
	
}

// Check if email exists 
function check_if_email_exists($email){
	$dbh = db_connect();
	$query = $dbh->query("SELECT * FROM users WHERE email = '$email' ");
	$result = $query->fetch(PDO::FETCH_ASSOC);
	if(!$result['email']){
		return true;
	}else{
		return false;
	}
}
// Edit user profile
function edit_profile(){

	$currentUsername = $_SESSION['username'];
	$newUsername = $_POST['username'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];

	// Check if image is uploaded
	if(is_avatar_valid()){
		create_avatar();
	}

	$dbh = db_connect();
	$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

	if(isset($_POST['email']) && $_POST['email'] !== ""){
		$email = $_POST['email'];
		if(check_if_email_exists($email)){
			$query = $dbh->query("UPDATE users SET username = '$newUsername', email = '$email', first_name = '$first_name', last_name = '$last_name' WHERE username='$currentUsername'");
			$_SESSION['email'] = $email;
		}else{
			return false;
		}
	}else{
		$query = $dbh->query("UPDATE users SET username = '$newUsername', first_name = '$first_name', last_name = '$last_name' WHERE username='$currentUsername'");
	}
	$_SESSION['username'] = $newUsername;
	$_SESSION['first_name'] = $first_name;
	$_SESSION['last_name'] = $last_name;
	header('Location:index.php?action=display_profile');
}

// Check if avatar is valid
function is_avatar_valid(){

	if(empty($_FILES['avatar']['tmp_name']) === false){
		$file_ext = end(explode('.', $_FILES['avatar']['name']));
		if(!(in_array(strtolower($file_ext), array('jpg', 'jpeg', 'png', 'gif')) === false)){
			return true;
		}
	}
}

// Create avatar
function create_avatar(){

	$avatar = $_FILES['avatar']['tmp_name'];
	if(file_exists($avatar)){
		$avatar_size = getimagesize($avatar);

		if($avatar_size['mime'] === 'image/jpeg'){
			$avatar_img = imagecreatefromjpeg($avatar);
		}
		elseif($avatar_size['mime'] === 'image/png'){
			$avatar_img = imagecreatefrompng($avatar);
		}
		elseif($avatar_size['mime'] === 'image/gif'){
			$avatar_img = imagecreatefromgif($avatar);
		}
		else{
			$avatar_img = false;
		}

		if($avatar_img !== false){
			$thumb_width = 400;

			if($avatar_size[0] <= $thumb_width){
				$thumb = $avatar_img;
			}
			else{
				$new_size[0] = $thumb_width;
				$new_size[1] = ($avatar_size[1] / $avatar_size[0]) * $thumb_width;
				$thumb = imagecreatetruecolor($new_size[0], $new_size[1]);
				imagecopyresampled($thumb, $avatar_img, 0, 0, 0, 0, $new_size[0], $new_size[1], $avatar_size[0], $avatar_size[1]);
			}
			imagejpeg($thumb, "includes/users_avatar/{$_SESSION['id']}.jpg");
		}
	}
}

function remove_avatar(){

	unlink("includes/users_avatar/" . $_SESSION['id'] . ".jpg");
	header('Location:index.php?action=display_profile');
}



// ********************************************************************  SIDE MENU *************************************************************************************
// Get the dashboard side menu
function get_dashboard_sidebar(){

	$sidebar_categories = [];
	$dbh = db_connect();
	$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
	$query = $dbh->query("SELECT category_name FROM dashboard_sidebar");
	while($result = $query->fetch()){
		 $sidebar_categories[] = $result['category_name'];
	}
	return $sidebar_categories;
}

// Add side menu category
function add_sidemenu_folder(){

	$dir = 'storage';
	if (!file_exists($dir . '/' . $_POST['folder_name'])) {
	    mkdir($dir . '/' . $_POST['folder_name']);
	    $folder_name = $_POST['folder_name'];
	    $access = $_POST['access'];
	    $dbh = db_connect();
		$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
		$query = $dbh->query("INSERT INTO storage (name, access) VALUES ('$folder_name','$access')");
	}
}

// Change side menu category
function edit_sidemenu_folder(){

	$currentFolderName = $_GET['name'];
	$newFolderName = $_POST['folder_name'];
	$access = $_POST['access'];
	rename ("storage/". $currentFolderName, "storage/". $newFolderName);
	$dbh = db_connect();
	$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
	$query = $dbh->query("UPDATE storage SET name = '$newFolderName', access = '$access' WHERE name='$currentFolderName'");
	header('Location:index.php');
}

// Delete side menu category
function delete_sidemenu_folder(){

	$currentFolderName = $_GET['name'];
	rmdir('storage/'. $currentFolderName);
	$dbh = db_connect();
	$query = $dbh->query("DELETE FROM storage WHERE name='$currentFolderName'");
	header('Location:index.php');
}
// ********************************************************************  END SIDE MENU *************************************************************************************

// ********************************************************************  FILES AND FOLDERS *************************************************************************************

function display_files($dir) {
    $files = [
        'dirs' => [],
        'files' => []
    ];

    if (is_dir($dir)) {
        if ($resource = opendir($dir)) {
            while ($file = readdir($resource)) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($dir . '/' . $file)) {
                        $files['dirs'][] = $file;
                    } else {
                        $files['files'][] = $file;
                    }
                }
            }
            closedir($resource);
        }
    }
    return $files;
}

function delete_folder(){
	$currentFolderName = $_GET['name'];
	$path = explode('/',$currentFolderName);
	$newPath = array_pop($path);
	$redirectPath = implode('/', $path);
	rmdir($currentFolderName);
	header('Location:storage.php?name='. $redirectPath . '&action=open');
}

function delete_file(){
	$currentFolderName = $_GET['name'];
	$path = explode('/',$currentFolderName);
	$newPath = array_pop($path);
	$redirectPath = implode('/', $path);
	unlink($currentFolderName);
	header('Location:storage.php?name='. $redirectPath . '&action=open');
}

function download_file(){
	$file = $_GET['name'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;	
}

function back_a_directory(){
	$currentPath = $_GET['name'];
	$path = explode('/',$currentPath);
	$newPath = array_pop($path);
	$redirectPath = implode('/', $path);
	header('Location:storage.php?name='. $redirectPath . '&action=open');
}



// ********************************************************************  MESSAGES *************************************************************************************	
function display_messages(){
	$messages = [];
	$getCurrentUser = $_SESSION['id'];
	$dbh = db_connect();
	$query = $dbh->query("SELECT * FROM messages WHERE assigned_user_id = '$getCurrentUser'");
	while($result = $query->fetch(PDO::FETCH_ASSOC)){
		 $messages[] = $result;
	}
	return $messages;
}

function open_message(){
	$messageId = $_GET['id'];
	$dbh = db_connect();
	$query = $dbh->query("SELECT * FROM messages INNER JOIN users ON messages.assigned_user_id = users.id WHERE messages.id = '$messageId'");
	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result;

}

function send_message(){
	$currentUserId = $_SESSION['id'];
	$currentUsername = $_SESSION['username'];
	$currentUserEmail = $_SESSION['email'];
	$to = $_POST['to'];
	$title = $_POST['title'];
	$massage = $_POST['comment'];

	if(!check_if_email_exists($to)){
		$userInfo = user_info_by_email($to);
		$userId = $userInfo['id'];
		$dbh = db_connect();
		$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
		$query = $dbh->query("INSERT INTO messages (title, body, created_user_id, assigned_user_id) VALUES ('$title','$massage','$currentUserId','$userId')");

		// Send a notification to the email
		// $to = "ivand91@abv.bg";
	 //    $subject = "Имате ново съобщение от $currentUsername";
	 //    $msg ="Email: $currentUserEmail\r\n";
	 //    $msg .="Тема: $title\r\n";
	 //    $msg .="Съобщение: $massage\r\n";
	 //    $msg = wordwrap($msg,140);
	 //    $headers = "MIME-Version: 1.0\r\n";
	 //    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
	 //    $headers .= "From: $currentUsername<$currentUserEmail>\r\n";

	   	// TODO NEED TO FIX UNCOMENT THAT LATER
	    // mail($to, $subject, $msg, $headers);
	    header('Location:index.php?action=messages');
	}
	else{
		echo "Грешен имейл адрес";
		return false;
	}
}

function delete_message(){
	$messageId = $_GET['delete'];
	$dbh = db_connect();
	$query = $dbh->query("DELETE FROM messages WHERE id='$messageId'");
}