<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'delete_student'){
	$save = $crud->delete_student();
	if($save)
		echo $save;
}
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == 'update_account'){
	$save = $crud->update_account();
	if($save)
		echo $save;
}
if($action == 'verify_account'){
	$save = $crud->verify_account();
	if($save)
		echo $save;
}
if($action == "save_settings"){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}
if($action == "save_course"){
	$save = $crud->save_course();
	if($save)
		echo $save;
}

if($action == "delete_course"){
	$delete = $crud->delete_course();
	if($delete)
		echo $delete;
}
if($action == "update_orientation_acc"){
	$save = $crud->update_orientation_acc();
	if($save)
		echo $save;
}
if($action == "save_gallery"){
	$save = $crud->save_gallery();
	if($save)
		echo $save;
}
if($action == "delete_gallery"){
	$save = $crud->delete_gallery();
	if($save)
		echo $save;
}

if($action == "save_feedbacks"){
	$save = $crud->save_feedbacks();
	if($save)
		echo $save;
}
if($action == "delete_feedbacks"){
	$save = $crud->delete_feedbacks();
	if($save)
		echo $save;
}
if($action == "save_forum"){
	$save = $crud->save_forum();
	if($save)
		echo $save;
}
if($action == "delete_forum"){
	$save = $crud->delete_forum();
	if($save)
		echo $save;
}
if($action == "save_category"){
	$save = $crud->save_category();
	if($save)
		echo $save;
}
if($action == "delete_category"){
	$save = $crud->delete_category();
	if($save)
		echo $save;
}

if($action == "save_comment"){
	$save = $crud->save_comment();
	if($save)
		echo $save;
}
if($action == "delete_comment"){
	$save = $crud->delete_comment();
	if($save)
		echo $save;

}

if($action == "save_event"){
	$save = $crud->save_event();
	if($save)
		echo $save;
}
if($action == "delete_event"){
	$save = $crud->delete_event();
	if($save)
		echo $save;
}	
if($action == "participate"){
	$save = $crud->participate();
	if($save)
		echo $save;
}
// if($action == "get_venue_report"){
// 	$get = $crud->get_venue_report();
// 	if($get)
// 		echo $get;
// }
// if($action == "save_art_fs"){
// 	$save = $crud->save_art_fs();
// 	if($save)
// 		echo $save;
// }
// if($action == "delete_art_fs"){
// 	$save = $crud->delete_art_fs();
// 	if($save)
// 		echo $save;
// }
// if($action == "get_pdetails"){
// 	$get = $crud->get_pdetails();
// 	if($get)
// 		echo $get;
// }
if($action == "save_participants"){
	$save = $crud->save_participants();
	if($save)
		echo $save;
}

if($action == "get_exam"){
	$get = $crud->get_exam();
	if($get)
		echo $get;
}

if($action == "save_exam"){
	$save = $crud->save_exam();
	if($save)
		echo $save;
}
if($action == "request"){
	$save = $crud->request();
	if($save)
		echo $save;
}
if($action == "delete_request"){
	$save = $crud->deleteRequest();
	if($save)
		echo $save;
}
if($action == "verify_request"){
	$save = $crud->verifyRequest();
	if($save)
		echo $save;
}
if($action == "submit_answer"){
	$save = $crud->submit_answer();
	if($save)
		echo $save;
}
if($action == "save_evaluation"){
	$save = $crud->save_evaluation();
	if($save)
		echo $save;
}
if($action == "submit_evaluation"){
	$save = $crud->submit_evaluation();
	if($save)
		echo $save;
}
if($action == "submit_comment"){
	$save = $crud->submit_comment();
	if($save)
		echo $save;
}
if($action == "user_comment"){
	$save = $crud->user_comment();
	if($save)
		echo $save;
}
if($action == "admin_comment"){
	$save = $crud->admin_comment();
	if($save)
		echo $save;
}

ob_end_flush();
?>
