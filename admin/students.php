<?php include('db_connect.php');?>

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card glass">
					<div class="card-header" style="color:#fff;">
						<b>List of Student</b>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<!-- <colgroup>
								<col width="5%">
								<col width="10%">
								<col width="15%">
								<col width="15%">
								<col width="30%">
								<col width="15%">
							</colgroup> -->
							<thead style="color:#fff;">
								<tr>
									<th class="text-center">#</th>
									<th class="">Avatar</th>
									<th class="">Name</th>
									<th class="">Address</th>
									<th class="">Course</th>
									<th class="">email</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$img = array();
                          		$fpath = 'assets/uploads/';
								$files= is_dir($fpath) ? scandir($fpath) : array();
								foreach($files as $val){
									if(!in_array($val, array('.','..'))){
										$n = explode('_',$val);
										$img[$n[0]] = $val;
									}
								}
								// $stud = $conn->query("SELECT a.*,c.course,Concat(a.lastname,a.firstname,a.middlename) as name from accounts a inner join courses c on c.id = a.course_id order by Concat(a.lastname,a.firstname,a.middlename) asc");
								$stud = $conn->query("SELECT * From accounts ORDER BY lastname ASC");
								while($row=$stud->fetch_assoc()):
									
								?>
								<tr style="background: transparent;color:#fff;">
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="text-center" style="padding: 2px 2px">
										<div class="" >
										 <img class="profile-picture" src="<?php echo isset($img[$row['id']]) && is_file($fpath.'/'.$img[$row['id']]) ? $fpath.'/'.$img[$row['id']] :'' ?>?v=<?php echo time()?>" class="gimg" alt="">
										</div>
									</td>
									<td class="">
										<?php $middlename = !empty($row['middlename']) ? strtoupper($row['middlename'][0]) . '.' : ',';?>
										 <p> <b><?php echo ucwords($row['firstname']) .  ' ' . $middlename . ' ' . ucwords($row['lastname']); ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['address'] ?></b></p>
									</td>
									<td class="">
									<?php 
										$courseId = intval($row['course']);

										// Prepare and execute the statement
										$stmt = $conn->prepare("SELECT course FROM courses WHERE id = ?");
										$stmt->bind_param("i", $courseId);
										$stmt->execute();
										$stmt->bind_result($course);
										$stmt->fetch();
										$stmt->close();
									?>
										 <p> <b><?php echo $course ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['email'] ?></b></p>
									</td>
									
									<td class="text-center">
										<button class="btn btn-sm btn-outline-primary view_student" type="button" data-id="<?php echo $row['id']; ?>" >View</button>
										<button class="btn btn-sm btn-outline-primary edit_student" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_student" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	.profile-picture {
		width: 40px;
		height: 40px;
		border-radius: 50%;
		margin-right: 10px;
	}
	p b{
		font-size: .85em;
    	font-weight: 500;
	}
	.dataTables_wrapper .dataTables_length {
		color: #fff !important;
	}
	.dataTables_wrapper .dataTables_filter {
		color: #fff !important;
	}
	.dataTables_wrapper .dataTables_info{
		color: #fff;
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
		color: #fff !important;
	}
	.glass{
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
		border-radius: 20px;
		border:1px solid rgba(255, 255, 255, 0.18);
		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
	}

</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	
	$('.view_student').click(function(){
		uni_modal("View Student","manage_student.php?id="+$(this).attr('data-id'),'large')

	})
	$('.edit_student').click(function(){
		uni_modal("Edit Student","edit_student.php?id="+$(this).attr('data-id'),'large')
	})
	$('.delete_student').click(function(){
		_conf("Are you sure to delete this student?","delete_student",[$(this).attr('data-id')])
	})
	$('.verify_account').click(function(){
		verify_account($("#verify").val());
	})
	
	function delete_student($id){
		console.log($id);
		start_load();
		$.ajax({
			url:'ajax.php?action=delete_student',
			method:'POST',
			data:{id:$id},
			success:function(resp){

				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload(true)
					},1500)

				}
			}
		})
	}
	function verify_account($id){
		console.log($id);
		start_load();
		$.ajax({
			url:'ajax.php?action=verify_account',
			method:'POST',
			data:{id:$id},
			success:function(resp){

				if(resp==1){
					alert_toast("Data successfully verify",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>