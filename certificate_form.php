<?php include 'admin/db_connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">

  <title><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></title>
 	

<?php
//    if(!isset($_SESSION['login_id']))
//     header('location:login.php');
//  include('admin/header.php'); 
 // include('./auth.php'); 
 ?>
</head>
<style>
body{
	background: none;
}
.box{
	position: absolute;
    margin: 85px auto;
    width: 990px;
    height: 700px;
    background-image: url(assets/img/cert_bckgrnd.png);
    background-position: center;
    background-size: 100% 100%;
    border-collapse: separate;
    box-shadow: 1px 1px 3px 1px #333;
}
.header-top{
	text-align: left;
    font-size: 1.7em;
    padding-left: 6.3em;
    padding-top: 0.7em;
    font-weight: 500;
	

}
.top-right-label{
	justify-content: flex-start;
    align-content: flex-start;
    flex-direction: column;
    margin-top: 16px;
}
.top-right-label span{
	font-size: .7em;
    margin-left: 5.8em ;
	font-weight: 500;
	color: black;
}
.cert{
	padding-top: 2.3em;
    justify-content: flex-end;
    margin-right: 12em;
}
.py-5{
	display: none;
}
</style>
<body>
	<?php 
		$_date = $_GET['_date'];
		// Calculate the difference in days
		$_day = date('d', strtotime($_date));
		$fullDate = date('F j, Y', strtotime($_date));
		$fDate = date('F , Y', strtotime($_date));

	?>
	<div class="container">
		<div class="box">
			<div class="row form-group" style="margin-top: 10px;height: 100px; margin-bottom: 0px">
				<div class="col-md-6 header-top">
					<label style="color: black;">SOUTHERN LEYTE</label>
				</div>
				<div class="col-md-6 top-right-label row">
					<span>BONTOC CAMPUS</span>
					<span>San Ramon, Bontoc, Southern Leyte</span>
					<span>Contact No: 09989791809</span>
					<span>Email: <a href="">cd_bt@southernleytestateu.edu.ph</a> </span>
					<span>Website: www.southernleytestateu.edu.ph</span>
				</div>
			</div>
			<div class="text-center row">
				<span style="color: black;font-size: 9px;padding-left: 162px;margin-top: 3px;">Excellence | Service | Leadership and Good Governance | Innovation | Social Responsibility | Integrity | Professionalism | Spirituality</span>
			</div>
			<div class="row form-group cert" style="margin-top: 10px;height: 100px; margin-bottom: 0px">
				<label style="font-size: 3.8em;color: #00afc3;letter-spacing: 3px;">CERTIFICATE</label>
			</div>
			<div class="row form-group recog" style="justify-content: flex-end;margin-bottom: 0px;margin-right: 10.8em;color: black;">
				<label style="font-size: 2.5em;padding-top: 8px;">OF RECOGNITION</label>
			</div>
			<div class="row" style="justify-content: center;margin-bottom: 0px;color: black;margin-top: -21px;">
				<span style="padding-right: 9.5em ">is presented to</span>
			</div>
			<div class="row" style="justify-content: center;margin-bottom: 0px;color: #005a9d;margin-right: 3.5em;font-size: 2.5em;font-weight: 800;">
				<span name="userName" id="name"><?php echo $_GET['userName']?></span>
			</div>
			<div class="row" style="justify-content: center;margin-bottom: 0px;padding-right: 7.5em;margin-top: 1em;">
				<div style="font-size: 1.1em;margin-top: 1em;display: contents;">
					<span style="display: flex;">during the<p style="font-weight: 600; margin: 0; margin-left: 8px;">STUDENT ORIENTATION</p></span>
					<span style="display: flex;">held on <?php echo $fullDate ?> at the Southern Leyte State University-Bontoc Campus,</span>
					<span style="display: flex;">San Ramon, Bontoc, Southern Leyte.</span>
					<span style="display: flex;">Given this <span style="font-weight: 600;margin: 0 8px;"><?php echo addNumberSuffix($_day) ?></span>day of <p style="font-weight: 600;margin: 0 8px;"><?php echo $fDate ?></p> at SLSU-Bontoc, San Ramon, Bontoc, Southern Leyte.</span>

				</div>
			</div>
			<?php 
			function addNumberSuffix($number) {
				// Handle special cases for 11, 12, and 13
				if ($number % 100 >= 11 && $number % 100 <= 13) {
					$suffix = 'th';
				} else {
					switch ($number % 10) {
						case 1:
							$suffix = 'st';
							break;
						case 2:
							$suffix = 'nd';
							break;
						case 3:
							$suffix = 'rd';
							break;
						default:
							$suffix = 'th';
					}
				}
				
				return $number . $suffix;
			}
			
			
			?>

		</div>
	</div>
	
</body>
