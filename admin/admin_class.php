<?php
session_start();


ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}
	
	function login(){
			
			extract($_POST);		
			
			if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
				// Invalid CSRF token, handle error or redirect as needed
				http_response_code(403);
        		die("Forbidden: CSRF Token Validation Failed");
				return 3;
			}

			$qry = $this->db->query("SELECT * FROM users where username = '" .$username. "' and password = '".md5($password)."' ");
			
			if($qry->num_rows > 0){
				foreach ($qry->fetch_array() as $key => $value) {
					if($key != 'passwors' && !is_numeric($key)){
						$_SESSION['admin_'.$key] = $value;
					}
				}

				if($_SESSION['admin_type'] != 1){
					foreach ($_SESSION as $key => $value) {
						unset($_SESSION[$key]);
					}
					return 2 ;
				}
				while($row = $qry->fetch_assoc()) {
				    $_SESSION['admin_name'] = $row['username'];
				}
				$_SESSION['admin_role'] = 'Admin';
				unset($_SESSION['csrf_token']);
				return 1;	
			}else{
				return 2;
			}
	}
	function login2(){
		
			extract($_POST);
			if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
				// Invalid CSRF token, handle error or redirect as needed
				http_response_code(403);
        		die("Forbidden: CSRF Token Validation Failed");
			}
			
			if(isset($email))
				$username = $email;
		$qry = $this->db->query("SELECT * FROM accounts where email = '".$username."' and password = '".md5($password)."'");
		if($qry->num_rows > 0){
			
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'passwors' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
			if($_SESSION['login_id'] > 0){
				$bio = $this->db->query("SELECT * FROM accounts where id = ".$_SESSION['login_id']);
				if($bio->num_rows > 0){
					foreach ($bio->fetch_array() as $key => $value) {
						if($key != 'passwors' && !is_numeric($key))
							$_SESSION['bio'][$key] = $value;
					}
					$bio->fetch_array();
					$_SESSION['login_user'] = 'student';
					
				}
			}
			unset($_SESSION['csrf_token']);
			return 1;
		}else{
			return 3;
		}
	}
	function logout(){
		// Destroy admin sessions
		foreach ($_SESSION as $key => $value) {
			if (strpos($key, 'admin_') === 0) {
				unset($_SESSION[$key]);
			}
		}
		header("location: login.php");
	}
	
	function logout2(){
		// Destroy student sessions
		foreach ($_SESSION as $key => $value) {
			if (strpos($key, 'login_') === 0 || $key === 'bio') {
				unset($_SESSION[$key]);
			}
		}
		header("location: ../index.php");
	}

	function save_user(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", username = '$username' ";
		if(!empty($password))
		$data .= ", password = '".md5($password)."' ";
		$data .= ", type = '$type' ";
		if($type == 1)
			$establishment_id = 0;
		$data .= ", establishment_id = '$establishment_id' ";
		$chk = $this->db->query("Select * from users where username = '$username' and id !='$id' ")->num_rows;
		if($chk > 0){
			return 2;
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO users set ".$data);
		}else{
			$save = $this->db->query("UPDATE users set ".$data." where id = ".$id);
		}
		if($save){
			return 1;
		}
	}
	function delete_user(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM users where id = ".$id);
		if($delete)
			return 1;
	}
	function delete_student(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM accounts where id = ".$id);
		if($delete)
			return 1;
	}
	function signup(){
		extract($_POST);
		$data = " firstname = '" . ucwords($firstname) ."' ";
		$data .= ", middlename = '" . ucwords($middlename) ."' ";
		$data .= ", lastname = '" . ucwords($lastname) ."' ";
		$data .= ", gender = '$gender' ";
		$data .= ", address = '$address' ";
		$data .= ", number = '$number' ";
		$data .= ", year = '$year' ";
		$data .= ", section = '$section' ";
		$data .= ", course = $course ";
		$data .= ", email = '$email' ";
		$data .= ", password = '".md5($password)."' ";
		//$data .= ", status = 1"; 
		$chk = $this->db->query("SELECT * FROM accounts where email = '$email' ")->num_rows;
		if($chk > 0){
			return 2;
		}
			$save = $this->db->query("INSERT INTO accounts set ".$data);
		if($save){
			$id = $this->db->insert_id;
			$file = explode('.',$_FILES['img']['name']);
			$file = end($file);
			$uid = $this->db->insert_id;
			$data = '';
			foreach($_POST as $k => $v){
				if($k =='password')
					continue;
				if(empty($data) && !is_numeric($k) )
					$data = " $k = '$v' ";
				else
					$data .= ", $k = '$v' ";
			}
			if($_FILES['img']['tmp_name'] != ''){
							$fname = $id.'_img'.'.'.$file;
							$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
							$data .= ", avatar = '$fname' ";

			}
			return 1;

			
		}
	}
	function update_account(){
		extract($_POST);
		$data = " firstname = '$firstname'";
		$data .= ", middlename = '$middlename' ";
		$data .= ", lastname = '$lastname' ";
		$data .= ", gender = '$gender' ";
		$data .= ", address = '$address' ";
		$data .= ", number = '$number' ";
		$data .= ", year = '$year' ";
		$data .= ", section = '$section' ";
		$data .= ", course = $course ";
	
		$chk = $this->db->query("SELECT email FROM accounts where id = $id ");
		$e = $chk->fetch_assoc();
		if($e['email'] != $email){
			$row = $chk->num_rows;
			if($row > 0){
				return 2;
			}
			$data .= ", email = '$email' ";
		}
		
		if(!empty($password)){
			$data .= ", password = '".md5($password)."' ";
		}
		$save = $this->db->query("UPDATE accounts set $data where id = $id");
		if($_FILES['img']['tmp_name'] != ''){
			$file = explode('.',$_FILES['img']['name']);
			$file = end($file);
			$fname = $id.'_img'.'.'.$file;
			$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
			$data .= ", avatar = '$fname' ";

		}
		if($save){
			return 1;
		}else{
			return 2;
		}
		// $data = " name = '".$firstname.' '.$lastname."' ";
		// $data .= ", username = '$email' ";
		// if(!empty($password))
		// $data .= ", password = '".md5($password)."' ";
		// $chk = $this->db->query("SELECT * FROM accounts where username = '$email' and id != '{$_SESSION['login_id']}' ")->num_rows;
		// if($chk > 0){
		// 	return 2;
		// 	exit;
		// }
		// 	$save = $this->db->query("UPDATE accounts set $data where id = '{$_SESSION['login_id']}' ");
		// if($save){
		// 	$data = '';
		// 	foreach($_POST as $k => $v){
		// 		if($k =='password')
		// 			continue;
		// 		if(empty($data) && !is_numeric($k) )
		// 			$data = " $k = '$v' ";
		// 		else
		// 			$data .= ", $k = '$v' ";
		// 	}
		// 	if($_FILES['img']['tmp_name'] != ''){
		// 					$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
		// 					$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
		// 					$data .= ", avatar = '$fname' ";

		// 	}
		// 	$save_alumni = $this->db->query("UPDATE alumnus_bio set $data where id = '{$_SESSION['bio']['id']}' ");
		// 	if($data){
		// 		foreach ($_SESSION as $key => $value) {
		// 			unset($_SESSION[$key]);
		// 		}
		// 		$login = $this->login2();
		// 		if($login)
		// 		return 1;
		// 	}
		// }
	}
	function verify_account(){
		extract($_POST);
		$verify = $this->db->query("UPDATE accounts set status = 1 where id = ".$id);
		if($verify){
			return 1;
		}
	}
	function save_settings(){
		extract($_POST);
		$data = " name = '".str_replace("'","&#x2019;",$name)."' ";
		$data .= ", email = '$email' ";
		$data .= ", contact = '$contact' ";
		$data .= ", about_content = '".htmlentities(str_replace("'","&#x2019;",$about))."' ";
		if($_FILES['img']['tmp_name'] != ''){
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
						$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
					$data .= ", cover_img = '$fname' ";

		}
		
		// echo "INSERT INTO system_settings set ".$data;
		$chk = $this->db->query("SELECT * FROM system_settings");
		if($chk->num_rows > 0){
			$save = $this->db->query("UPDATE system_settings set ".$data);
		}else{
			$save = $this->db->query("INSERT INTO system_settings set ".$data);
		}
		if($save){
		$query = $this->db->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach ($query as $key => $value) {
			if(!is_numeric($key))
				$_SESSION['settings'][$key] = $value;
		}

			return 1;
				}
	}

	
	function save_course(){
		extract($_POST);
		$data = " course = '$course' ";
			if(empty($id)){
				$save = $this->db->query("INSERT INTO courses set $data");
			}else{
				$save = $this->db->query("UPDATE courses set $data where id = $id");
			}
		if($save)
			return 1;
	}
	function delete_course(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM courses where id = ".$id);
		if($delete){
			return 1;
		}
	}
	function update_orientation_acc(){
		extract($_POST);
		$update = $this->db->query("UPDATE user_bio set status = $status where id = $id");
		if($update)
			return 1;
	}
	function save_gallery(){
		extract($_POST);
		
			
		$img = array();
		$fpath = 'assets/uploads/gallery';
		$files = is_dir($fpath) ? scandir($fpath) : array();
		$data = " title = '$title' ";
		$data .= ", shortDescription = '$shortDescription' ";
		$data .= ", course = $course ";
		$data .= ", category = '$category' ";
		$data .= ", startDate = '$startDate' ";
		$data .= ", endDate = '$endDate' ";
		$data .= ", startTime = '$startTime' ";
		$data .= ", endTime = '$endTime' ";

		if(!empty($id)){
			$query = $this->db->query('UPDATE gallery set '.$data ." WHERE id=" .$id);
			if($query){
				return 2;
			}else{
				return 3;
			}
		}

		foreach ($files as $val) {
			if (!in_array($val, array('.', '..'))) {
				$n = explode('_', $val);
				$img[$n[0]] = $val;
			}
		}
		
		if ($_FILES['my_video']['name'] != '') {
			$video_name = $_FILES['my_video']['name'];
			$tmp_name = $_FILES['my_video']['tmp_name'];
			$size = $_FILES['my_video']['size'];
			$error = $_FILES['my_video']['error'];

			if ($size > 0) {
				$size_mb = round($size / 1024 / 1024, 2); // Convert to MB and round to 2 decimal places
			} else {
				//return "Invalid file size";
			}
			
			//return $size_mb;
			
			if ($error === 0) {
				$video_ = pathinfo($video_name, PATHINFO_EXTENSION);
				$video_lc = strtolower($video_);
				$allowed_exs = array("mp4", 'webm', 'avi', 'flv');
				if (in_array($video_lc, $allowed_exs)) {
					$file = explode('.', $_FILES['my_video']['name']);
					$file = end($file);
					$new_video_name = $title . '.' . $file;
					$video_path = 'assets/uploads/videos/' . $new_video_name;
					// move_uploaded_file($tmp_name, $video_path);
					// 	$query = $this->db->query('INSERT INTO gallery set '.$data);
					// 	if($query){
					// 		return 2;
					// 	}else{
					// 		return 3;
					// 	}
					// Use FFmpeg to resize the video to approximately 25MB
					if($size_mb > 35){
						$ffmpegCommand = "E:\laragon\www\orientation\ffmpeg\bin\ffmpeg.exe -i \"{$tmp_name}\" -vf scale=iw/2:ih/2 -c:v libx264 -b:v 600k -maxrate 800k -bufsize 1200k -y \"{$video_path}\"";
						exec($ffmpegCommand . ' 2>&1', $output, $returnCode);
			
						// Log debugging output
						//file_put_contents('ffmpeg_output.log', print_r($output, true), FILE_APPEND);
						// Check if FFmpeg command was successful
						if ($returnCode === 0) {
							$query = $this->db->query('INSERT INTO gallery set '.$data);
							if($query){
								return 1;
							}else{
								return 3;
							}
						}else{
							return 3; //Error: Video conversion failed
						}
					}else{
						move_uploaded_file($tmp_name, $video_path);
						$query = $this->db->query('INSERT INTO gallery set '.$data);
						if($query){
							return 2;
						}else{
							return 3;
						}
					}
				}
			}
		}

		//update
		
		// 	$save = $this->db->query('UPDATE gallery(title,shortDescription,course,category) VALUES("' .$title . '","' . $short_description . '","' .$course .'","' . $category .'")');
		// 	if($save){
		// 		$query = $this->db->query("SELECT MAX(id) AS id FROM gallery");
		// 		$row = $query->fetch_assoc();

		// 		//For upload Certificate
		// 		// if($_FILES['certificate']['name'] != ''){
		// 		// 	$uploadTo = "assets/uploads/certificate/"; 
		// 		// 	$allowFileType = array('pdf','doc','docx');
		// 		// 	$fileName = $_FILES['certificate']['name'];
		// 		// 	$tempPath=$_FILES["certificate"]["tmp_name"];
				
		// 		// 	$file = explode('.',$_FILES['certificate']['name']);
		// 		// 	$file = end($file);
		// 		// 	$basename = 'cert_'.$row['id'].'.'.$file;
		// 		// 	$originalPath = $uploadTo.$basename; 
		// 		// 	$fileType = pathinfo($originalPath, PATHINFO_EXTENSION); 
		// 		// 	if(in_array($fileType, $allowFileType)){ 
		// 		// 		// Upload file to server 
		// 		// 		move_uploaded_file($tempPath,$originalPath);
		// 		// 	}else{
		// 		// 		return 3;
		// 		// 	}    
		// 		// }
		// 	}
		// }else{
		// 	$save = $this->db->query("UPDATE gallery set title = '$title',shortDescription = '$short_description',course = '$course',category = '$category'" . "where id=".$id);
		// 	if($save){return 2;}
		//}
		
	}
	function delete_gallery(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM gallery where id = ".$id);
		if($delete){
			$query = $this->db->query("SELECT id FROM exams where idVideo = ".$id);
			if($query){
				$row = $query->fetch_assoc();
				if($row != null){
					$idExam = $row['id'];
					$delete2 = $this->db->query("DELETE FROM questions where idExam = ".$idExam);
					if($delete2){
						$delete3 = $this->db->query("DELETE FROM exams where idVideo = ".$id);
						if($delete3){
							return 1;
						}
					}
				}else{
					return 1;
				}
			}else{
				return 1;
			}
		}
	}
	function save_feedbacks(){
		extract($_POST);
		$data = " company = '$company' ";
		$data .= ", job_title = '$title' ";
		$data .= ", location = '$location' ";
		$data .= ", description = '".htmlentities(str_replace("'","&#x2019;",$description))."' ";

		if(empty($id)){
			// echo "INSERT INTO feedbacks set ".$data;
		$data .= ", user_id = '{$_SESSION['login_id']}' ";
			$save = $this->db->query("INSERT INTO feedbacks set ".$data);
		}else{
			$save = $this->db->query("UPDATE feedbacks set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_feedbacks(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM feedbacks where id = ".$id);
		if($delete){
			return 1;
		}
	}
	function save_forum(){
		extract($_POST);
		$data = " name = '$name' ";
		$data .= ", title = '$title' ";
		$data .= ", description = '".htmlentities(str_replace("'","&#x2019;",$description))."' ";

		if(empty($id)){
		$data .= ", user_id = '{$_SESSION['login_id']}' ";
			$save = $this->db->query("INSERT INTO forum_topics set ".$data);
		}else{
			$save = $this->db->query("UPDATE forum_topics set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_forum(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM forum_topics where id = ".$id);
		if($delete){
			return 1;
		}
	}
	function save_category(){
		extract($_POST);
		$data = "category = '$category' ";
		if($_FILES['banner']['tmp_name'] != ''){
						$_FILES['banner']['name'] = str_replace(array("(",")"," "), '', $_FILES['banner']['name']);
						$fname = $_FILES['banner']['name'];
						$move = move_uploaded_file($_FILES['banner']['tmp_name'],'assets/uploads/categories-img/'. $fname);
					$data .= ", banner = '$fname' ";
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO categories set ".$data);
		}else{
			date_default_timezone_set("Asia/Manila");
			$date = date('y-m-d h:i:s');
			 $data .= ", date_updated = '" . $date . "'";
			 $save = $this->db->query("UPDATE categories set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_category(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM categories where id = ".$id);
		if($delete){
			return 1;
		}
	}
	function save_comment(){
		extract($_POST);
		$data = " comment = '".htmlentities(str_replace("'","&#x2019;",$comment))."' ";

		if(empty($id)){
			$data .= ", topic_id = '$topic_id' ";
			$data .= ", user_id = " . $_SESSION['login_id'];
			$save = $this->db->query("INSERT INTO forum_comments set ".$data);
		}else{
			$save = $this->db->query("UPDATE forum_comments set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_comment(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM forum_comments where id = ".$id);
		if($delete){
			return 1;
		}
	}
	function save_event(){
		extract($_POST);
		$data = " title = '$title' ";
		$data .= ", schedule = '$schedule' ";
		$data .= ", content = '".htmlentities(str_replace("'","&#x2019;",$content))."' ";
		if($_FILES['banner']['tmp_name'] != ''){
						$_FILES['banner']['name'] = str_replace(array("(",")"," "), '', $_FILES['banner']['name']);
						$fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['banner']['name'];
						$move = move_uploaded_file($_FILES['banner']['tmp_name'],'assets/uploads/'. $fname);
					$data .= ", banner = '$fname' ";
		}
		if(empty($id)){

			$save = $this->db->query("INSERT INTO events set ".$data);
		}else{
			$save = $this->db->query("UPDATE events set ".$data." where id=".$id);
		}
		if($save)
			return 1;
	}
	function delete_event(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM events where id = ".$id);
		if($delete){
			return 1;
		}
	}
	
	function participate(){
		extract($_POST);
		$data = " event_id = '$event_id' ";
		$data .= ", user_id = '{$_SESSION['login_id']}' ";
		$commit = $this->db->query("INSERT INTO event_commits set $data ");
		if($commit)
			return 1;

	}
	function save_participants(){
		extract($_POST);
		$data = " video_id = $video_id";
		$data .= ", user_id = $user_id ";
		$data .= ", status = '$status' ";
		

		$query = $this->db->query("SELECT * FROM participants WHERE video_id = ".$video_id." AND user_id = ".$user_id);
		if($query->num_rows == 0){
			$save = $this->db->query("INSERT INTO participants set $data ");
			if($save)
				return $data;
		}
	}

	function get_exam(){
		extract($_POST);
		$query = $this->db->query("SELECT idVideo FROM exams WHERE idVideo = "+$id);
		if($query->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
		
	}

	function save_exam(){
		extract($_POST);

		$data = " idVideo = '$id' ";
		$data .= ", examName = '$examName'";
		$data .= ", items = '$items' ";

		$q = $this->db->query("SELECT id FROM exams WHERE idVideo = $id");
		$dat = $q->fetch_assoc();
		//update exam
		if ($dat !== null){
			$delete = $this->db->query("DELETE FROM questions where idExam = ".$dat['id']);
			if($delete){
				
				$update = $this->db->query("UPDATE exams set $data ");

				if($update){
					$query = $this->db->query("SELECT id FROM exams WHERE idVideo = $id");
					if ($query) {
						$row = $query->fetch_assoc();
						if ($row) {
							$idValue = $row['id'];
							for($i = 1; $i<=$items; $i++){
								$questionData = "idExam = ".$idValue;
								$questionData .= ", question = '".$question[$i]."'";
								$questionData .= ", _a = '".$a[$i]."'";
								$questionData .= ", _b = '".$b[$i]."'";
								$questionData .= ", _c = '".$c[$i]."'";
								$questionData .= ", _d = '".$d[$i]."'";
								$questionData .= ", answer = '".$answer[$i]."'";
		
								$saveQ = $this->db->query("INSERT INTO questions set $questionData ");
							}
							return 1;
		
						} else {
							// Handle the case when no row is found
							return 2;
						}
					}
				}else{
					return 2;
				}
			}else{
				return 2;
			}
		}else{
			$save = $this->db->query("INSERT INTO exams set $data ");
			if($save){
				$query = $this->db->query("SELECT id FROM exams WHERE idVideo = $id");
				if ($query) {
					$row = $query->fetch_assoc();
					if ($row) {
						$idValue = $row['id'];
						for($i = 1; $i<=$items; $i++){
							$questionData = "idExam = ".$idValue;
							$questionData .= ", question = '".$question[$i]."'";
							$questionData .= ", _a = '".$a[$i]."'";
							$questionData .= ", _b = '".$b[$i]."'";
							$questionData .= ", _c = '".$c[$i]."'";
							$questionData .= ", _d = '".$d[$i]."'";
							$questionData .= ", answer = '".$answer[$i]."'";
	
							$saveQ = $this->db->query("INSERT INTO questions set $questionData ");
						}
						return 1;
	
					} else {
						// Handle the case when no row is found
						return 2;
					}
				}
			}else{
				return 2;
			}
		}

		
	}
	function submit_answer(){
		extract($_POST);

		$score = 0;
		$status = "";
		for($i = 0; $i<$items; $i++){
			if($answer[$i] == $ans[$i]){
				$score++;
			}
		}
		$percentage = 75;
		$passRate = floor(($percentage / 100) * $items);
		if($score >= $passRate){
			$status = "passed";
		}else{
			$status = "failed";
		}

		$result = "$score/$items";

		$dataSave = " idUser = $idUser";
		$dataSave .= ", idExam = $idExam";
		$dataSave .= ", result = '$result'";
		$dataSave .= ", status = '$status'";

		// return json_encode($dataSave);

		$query = $this->db->query("SELECT id FROM exam_result WHERE idUser = $idUser and idExam = $idExam");
		//need to change -nnagas
		if($query->num_rows > 0){
			$save = $this->db->query("UPDATE exam_result set $dataSave where idUser = $idUser and idExam = $idExam");
			
		}else{
			$save = $this->db->query("INSERT INTO exam_result set $dataSave ");
		}
		if($save){
			return 1;
		}else{
			return 2;
		}
	}
	function request(){
		// Decode the JSON data
		$data = json_decode(file_get_contents("php://input"), true);
	
		// Check if decoding was successful
		if ($data === null) {
			return 2;
		} else {
			
			$id = $data['idUser'];
			$title = $data['title'];
			$idVideo = $data['idVideo'];
			$query = $this->db->query("SELECT lastname,firstname FROM accounts WHERE id = $id");
			if($query){
				$row = $query->fetch_assoc();
				$lastname = $row['lastname'];
				$firstname = $row['firstname'];
				$dataSave = " idUser = '$id'";
				$dataSave .= ", idVideo = '$idVideo'";
				$dataSave .= ", name = '$lastname,$firstname'";
				$dataSave .= ", title = '$title'";
				// to save request data
				//return $dataSave;
				$save = $this->db->query("INSERT INTO request set $dataSave ");
				if($save){
					return 1;
				}else{
					return 2;
				}
			}else{
				return 2;
			}
		}
	}
	function deleteRequest(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM request where id = ".$id);
		if($delete){
			return 1;
		}
	}
	function verifyRequest(){
		extract($_POST);
		$query = $this->db->query("UPDATE request set status = 2 where id=".$id);
		if($query){
			return 1;
		}
	}
	function save_evaluation(){
		extract($_POST);
		
		$data = " idVideo = $idVideo";
		$data .= ", idUser = $idUser ";

		$query = $this->db->query("SELECT * FROM evaluation where idUser = ".$idUser. " and idVideo = " . $idVideo);
		if($query->num_rows == 0){
			$save = $this->db->query("INSERT INTO evaluation set $data ");
			if($save){
				return 1;
			}
		}else{
			return 2;
		}
		

		// $q = $this->db->query("SELECT id FROM evaluation WHERE idVideo = $idVideo");
		// $dat = $q->fetch_assoc();
		// //update exam
		// if ($dat !== null){
		// 	$delete = $this->db->query("DELETE FROM evaluation_questions where idEvaluation = ".$dat['id']);
		// 	if($delete){
		// 		$update = $this->db->query("UPDATE evaluation set $dataSave ");
		// 		if($update){
		// 			$query = $this->db->query("SELECT id FROM evaluation WHERE idVideo = $idVideo");
		// 			if ($query) {
		// 				$row = $query->fetch_assoc();
		// 				if ($row) {
		// 					$idValue = $row['id'];
		// 					for($i = 1; $i<=$items; $i++){
		// 						$questionData = "idEvaluation = ".$idValue;
		// 						$questionData .= ", question = '".$q[$i]."'";
		// 						$saveQ = $this->db->query("INSERT INTO evaluation_questions set $questionData ");
		// 					}
		// 					return 1;
		
		// 				} else {
		// 					// Handle the case when no row is found
		// 					return 2;
		// 				}
		// 			}
		// 		}else{
		// 			return 2;
		// 		}
		// 	}else{
		// 		return 2;
		// 	}
		// }else{
		// 	$save = $this->db->query("INSERT INTO evaluation set $dataSave ");
		// 	if($save){
		// 		$query = $this->db->query("SELECT id FROM evaluation WHERE idVideo = $idVideo");
		// 		if ($query) {
		// 			$row = $query->fetch_assoc();
		// 			if ($row) {
		// 				$idValue = $row['id'];
		// 				for($i = 1; $i<=$items; $i++){
		// 					$questionData = "idEvaluation = ".$idValue;
		// 					$questionData .= ", question = '".$quest[$i]."'";
		// 					$saveQ = $this->db->query("INSERT INTO evaluation_questions set $questionData ");
		// 				}
		// 				return 1;
	
		// 			} else {
		// 				// Handle the case when no row is found
		// 				return 2;
		// 			}
		// 		}
		// 	}else{
		// 		return 2;
		// 	}
		// }
	}
	function submit_evaluation(){
		extract($_POST);

		
		$query = $this->db->query("SELECT * FROM evaluation WHERE idVideo = ".$id);


		$row = $query->fetch_assoc();
		if($row != null){
			$items = $row['items'];
			for($i = 0; $i < $items; $i++){
				$dataSave = " idUser = $idUser";
				$dataSave .= ", idVideo = $id";
				$dataSave .= ", idEvaluation = $idEvaluation";
				$dataSave .= ", answer = '".$answer[$i]."'";
				$save = $this->db->query("INSERT INTO evaluation_answer set $dataSave ");
			}

			return 1;
			
		}

	}	
	function submit_comment(){
		extract($_POST);
		$data = json_decode(file_get_contents("php://input"), true);

		$idUser = $data['idUser'];
		$idVideo = $data['idVideo'];
		$comment = $data['comment'];


		$dataSave = " idUser = $idUser";
		$dataSave .= ", idVideo = $idVideo";

		$query = $this->db->query("SELECT * FROM accounts WHERE id = ".$data['idUser']);
		$row = $query->fetch_assoc();

		$q = $this->db->query("SELECT * FROM gallery WHERE id = ".$data['idVideo']);
		$dat = $q->fetch_assoc();
		
		if($row != null){
			
			if($dat != null){
				$dataSave .= ", title = '".$dat['title']."'";
				$dataSave .= ", firstName = '".$row['firstname']."'";
				$dataSave .= ", lastName = '".$row['lastname']."'";
				$dataSave .= ", comment = '".$comment."'";
				$save = $this->db->query("INSERT INTO user_comments set $dataSave ");
				if($save)
					return 1;
			}
			
		}
	}
	function user_comment(){
		// Decode the JSON data
		$data = json_decode(file_get_contents("php://input"), true);
	
		// Check if decoding was successful
		if ($data === null) {
			return 2;
		} else {
			
			$id = $data['idUser'];
			$idVideo = $data['idVideo'];
			$comment = $data['comment'];

			$val = " idUser = " . $id;
			$val .= ", idVideo = " . $idVideo;
			$val .= ", comment = '" . $comment . "'";

			$save = $this->db->query("INSERT INTO user_comments set $val ");
			if($save)
			return $val;
			
		}
	}	
	function admin_comment(){
		// Decode the JSON data
		$data = json_decode(file_get_contents("php://input"), true);
	
		// Check if decoding was successful
		if ($data === null) {
			return 2;
		} else {
			
			$id = $data['idUser'];
			$idVideo = $data['idVideo'];
			$comment = $data['comment'];

			$val = " idUser = " . $id;
			$val .= ", idVideo = " . $idVideo;
			$val .= ", comment = '" . $comment . "'";

			$save = $this->db->query("INSERT INTO admin_comments set $val ");
			if($save)
			return $val;
			
		}
	}

}