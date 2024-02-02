<?php include('db_connect.php');?>	

<style>
	#toTopBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 18px;
		border: none;
		outline: none;
		background-color: #007bff;
		color: white;
		cursor: pointer;
		padding: 15px;
		border-radius: 4px;
	}

	#toTopBtn:hover {
		background-color: #6c757d;
	}
	p b{
		font-weight: 500;
	}
	[type=search]{
		border-radius: 5px;
		padding: 5px;
		font-size: 0.85em;
		font-weight: 500;
	}
	.glass{
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
		border-radius: 20px;
		border:1px solid rgba(255, 255, 255, 0.18);
		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
	}
	.table.dataTable tbody tr{
		background: transparent !important;
		color: #fff;
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
	.btn-custom{
		background: #10306e !important;
    	border-color: #10306e !important;
		color: #fff;
	}
	.btn-custom:hover{
		color: #fff !important;
		
		background: #0a1d42 !important;
    	border-color: #0a1d42 !important;
	}
</style>

<div class="container-fluid">
	<button id="toTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
		<div class="row" style="flex-direction: column;flex-wrap: nowrap;">
			<div class="row">
			<!-- FORM Panel -->
				<div class="col-md-4">
					<form action="" id="manage-gallery" enctype="multipart/form-data">
						<div class="card glass" style="margin-bottom: 1rem; color:#fff;">
							<a class="top" name="top" id="top"></a>
							<div class="card-header">
									Upload
							</div>
								<div class="card-body" id="upload_card_body">
									<input type="hidden" name="id" id="vidID">
									<div class="form-group row">
										<div class="col-md-12">
											<label for="" class="control-label">Video</label>
											<input type="file" class="form-control chose-file" name="my_video" id="videoFile">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12">
											<label class="control-label">Title</label>
											<input class="form-control" name='title' required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12">
											<label class="control-label">Short Description</label>
											<input class="form-control" name='shortDescription' required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12">
											<label for="" class="control-label">Course</label>
											<select class="custom-select" name="course" required>
												<option selected></option>
												<?php 
												$qry = $conn->query("SELECT * FROM courses");
												while($row=$qry->fetch_assoc()): ?>
													<option value="<?php echo $row['id']?>"><?php echo $row['course']?></option>
												<?php endwhile;?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12">
											<label for="" class="control-label">Categories</label>
											<select class="custom-select" name="category" required>
												<option selected></option>
												<?php 
												$qry = $conn->query("SELECT category FROM categories");
												while($row=$qry->fetch_assoc()): ?>
													<option value="<?php echo $row['category']?>"><?php echo $row['category']?></option>
												<?php endwhile;?>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-12" >
											<span style="margin-top: 10px;cursor:pointer" class="form-control" name='dateTime' data-toggle="modal" data-target="#dateTimeModal">Click here to set Time & Date</span>
											<label class="control-label"style="display: flex;margin-top: 10px">From: 
												<span id="strtD" style="margin: 0 5px; width: 95px"></span>
												<span id="strtT"></span>
											</label>
										</div>
										<div class="col-md-12">
											<label class="control-label"style="padding-left: 22px;display: flex;">To: 
												<span id="endD" style="margin: 0 5px;width: 95px"></span>
												<span id="endT"></span>
											</label>
										</div>
									</div>
									<div class="form-group row" style="justify-content: center;">
										<button class="btn btn-sm btn-primary col-sm-4" style="margin-right: 1rem;cursor:pointer"> Save</button>
										<button class="btn btn-sm btn-danger col-sm-4" id="btnCancel" type="button" onclick="$('#manage-gallery').get(0).reset()"> Cancel</button>
									</div>
									<input type="hidden" name="editStatus" id="editStatus" data-edit="0" value="0">
								</div>
						</div>
						<div class="modal fade" id="dateTimeModal">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<span style="font-weight: 600;">Set the Date and Time</span>
									</div>
									<div class="container-fluid row" style="justify-content: flex-start;margin-top: 1em;padding-right: 0;flex-wrap: nowrap;">
										<div class="row col-md-6 form-group" style="flex-direction: column;margin-left: 1em;padding-left: 0;">
											<span style="text-align: center;color: #007bff">DATE</span>
											<span style="font-weight: 600;">From:</span>
											<input type="date" name="startDate" id="startDate" style="width: 100%;margin-bottom: 1em" >
											<span style="font-weight: 600;">To:</span>
											<input type="date" name="endDate" id="endDate" style="width: 100%" >
										</div>
										<div class="row col-md-6 form-group" style="flex-direction: column;margin-left: 1em ">
											<span style="text-align: center;color: #007bff">TIME</span>
											<input type="time" name="startTime" id="startTime" style="width: 100%;margin-top: 1.5em" > 
											<input type="time" name="endTime" id="endTime" style="width: 100%; margin-top: 2.5em">
										</div>
									</div>
									<div class="modal-footer">
										<span type="button" class="btn btn-success" data-dismiss="modal">Ok</span>
										<span type="button" class="btn btn-danger" data-dismiss="modal">Close</span>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<!-- FORM Panel -->

						<!-- Table Panel -->
						<div class="col-md-12">
							<div class="card glass">
								<div class="card-header" style="color: #fff;font-weight: 300;font-size: 1.1em;">					
									<b>Categories</b>
									<span class="">
										<button class="btn btn-primary btn-block btn-sm col-sm-3 float-right" type="button" id="new_category">
									<i class="fa fa-plus"></i> New Entry</button>
									</span>
								</div>
								<div class="card-body" id="cat_table_body" style="height: 40em;">
									<table class="table table-condensed table-bordered table-hover">
										<colgroup>
											<col width="5%">
											<col width="45%">
											<col width="25%">
											<col width="25%">
										</colgroup>
										<thead style="color: #fff;">
											<tr>
												<th class="text-center">#</th>
												<th class="">Name</th>
												<th class="">Date Created</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i = 1;
											$category = $conn->query("SELECT * FROM categories order by unix_timestamp(date_created) desc ");
											while($row=$category->fetch_assoc()):
												// $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
												// unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
											?>
											<tr>
												<td class="text-center"><?php echo $i++ ?></td>
												<td>
													<p><b><?php echo ucfirst($row['category']) ?></b></p>
												</td>
												<td>
													<p> <b><?php echo date("M d, Y",strtotime($row['date_created'])) ?></b></p>
												</td>
												<!-- <td>
													<p> <b><?php //if(!empty($row['date_updated'])){
														//echo date("M d, Y",strtotime($row['date_updated']));
													//}; ?></b></p>
												</td> -->
												<td class="text-center">
													<button class="btn btn-sm btn-outline-primary edit_category" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
													<button class="btn btn-sm btn-outline-danger delete_category" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
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
			<!-- FORM Panel -->
			
			<!-- Table Panel -->
			<div class="row">				
				<div class="col-md-12">
					<div class="card glass">
						<div class="card-header">
							<b class="" style="color:white;">Gallery List</b>
						</div>
						<div class="card-body">
							<table class="table table-bordered table-hover">
								<thead style="color:#fff;">
									<tr>
										<th class="text-center">#</th>
										<!-- <th class="text-center">IMG</th> -->
										<th class="text-center">VIDEO</th>
										<th class="text-center">Title</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$i = 1;
									$img = array();
									$fpath = 'assets/uploads/gallery';
									$vid_path = 'assets/uploads/videos/';
									$files= is_dir($fpath) ? scandir($fpath) : array();
									foreach($files as $val){
										if(!in_array($val, array('.','..'))){
											$n = explode('_',$val);
											$img[$n[0]] = $val;
										}
									}

									$gallery = $conn->query("SELECT * FROM gallery order by created desc");
									while($row=$gallery->fetch_assoc()):

									?>
									<tr>
										<td class="text-center" style="width: 15px;"><?php echo $i++ ?></td>
											
										<td class="" style="width: 240px">
											<?php
												$vid = $vid_path.$row['title'] . ".mp4";
												if($row['title'] != null){
											?>
											<video preload="metadata" controls ="controls">
												<source src="<?php echo $vid.'#t=0.9'; ?>">
											</video>
											<?php	
												}
											?>
										</td>
										<td class="">
											<?php echo $row['title'] ?>
										</td>
										<td class="text-center" style="width: 350px">
											<?php
												$exams = $conn->query("SELECT id FROM exams where idVideo = ".$row['id']);
												if($exams->num_rows > 0){
											?>
												<button class="btn btn-sm btn-custom edit_exam" type="button" data-id="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#myModal" style="color:white">Edit Exam</button>
											<?php
												}else{
											?>
												<button class="btn btn-sm btn-success add_exam" type="button" data-id="<?php echo $row['id'] ?>" data-toggle="modal" data-target="#myModal">Add Exam</button>
											<?php }?>											

											 <?php // $evaluation = $conn->query("SELECT * FROM evaluation where idVideo = ".$row['id']);
												//if($evaluation->num_rows > 0){
											?>
												<!-- <button class="btn btn-sm btn-custom edit_eval" type="button" data-id="<?php //echo $row['id'] ?>">Edit Evaluation</button> -->
											<?php // }else{ ?>
												<!-- <button class="btn btn-sm btn-success add_eval" type="button" onclick="addEvaluation(<?php // echo $row['id'] ?>)">Add Evaluation</button> -->
											<?php // }?> 
											<button class="btn btn-sm btn-primary edit_gallery" type="button" data-id="<?php echo $row['id'] ?>" 
											data-title="<?php echo $row['title'] ?>" data-short_description="<?php echo $row['shortDescription'] ?>" data-course="<?php echo $row['course'] ?>" data-category="<?php echo $row['category'] ?>" 
											data-startDate="<?php echo date("Y-m-d", strtotime($row['startDate'])) ?>" data-startTime="<?php echo  $row['startTime'] ?>" data-endDate="<?php echo date("Y-m-d", strtotime($row['endDate'])) ?>" data-endTime="<?php echo $row['endTime'] ?>" 
											><i class="fas fa-edit"></i></button>
											<button class="btn btn-sm btn-danger delete_gallery" type="button" data-id="<?php echo $row['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</td>
									</tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
					
						<!-- Modal Header -->
						<div class="modal-header">
							<label for="">New Entry</label>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
							<div class="row form-group">
								<div class="col-md-8">
									<label class="control-label">Exam Name</label>
									<input type="text" name="exam" class="form-control" required id="exam">
								</div>
								<div class="col-md-4">
									<label class="control-label">Total items</label>
									<input type="number" class="form-control" name="items" id="items" min="1" required>
								</div>
							</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-success" onclick="next()">Next</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>		
		</div>
</div>
<style>
	td{
		vertical-align: middle !important;
	}
	img#cimg{
		max-height: 30vh;
		max-width: calc(100%);
	}
	.gimg{
		max-height: 25vh;
		max-width: 30vw;
	}
	video{
		width: 100%;
	}
	.chose-file{
		height: 32px !important;
		padding: 0px !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height:150px;
	}
	
</style>
<script>
	var er = false
	$( document ).ready(function(){
		var h = document.getElementById("cat_table_body");
		$('#upload_card_body').css('height',h.offsetHeight+5);
	});
	$('.add_exam').click(function(){
		$("#vidID").val([$(this).attr('data-id')]);
	})
	$('.edit_exam').click(function(){
		$("#vidID").val([$(this).attr('data-id')]);
	})
	function next(){
		if($('#exam').val() === ''){
			$('#exam').addClass('error');
			er = true;
			
		}else{
			$('#exam').removeClass('error');
			er=false;
		}
		if($('#items').val() === ''){
			$('#items').addClass('error');
			er = true;
		}else{
			$('#items').removeClass('error');
			er=false;
		}

		if(!er){
			var id = $("#vidID").val();
			var data ="[exam:'"+$("#exam").val()+"',items:"+$("#items").val()+"]";
						// const serializedObject = JSON.stringify(data);
			// const encodedObject = encodeURIComponent(serializedObject);
			var examTitle = $('#exam').val();
			var encodedExamTitle = encodeURIComponent(examTitle);  // encode the examTitle
			uni_modal("New Entry", "create_exam.php?id=" + id + "&examName='" + encodedExamTitle + "'&items=" + $("#items").val(), 'mid-large');
		}
		
	}
	

	$('#manage-gallery').submit(function(e){
		e.preventDefault()
		
		var verifiedVid = ($('#editStatus').val() == 0) ? ($("#videoFile")[0].files.length > 0) : true;
		$('#videoFile').prop("required", ($('#editStatus').val() == 0));

		var strtDate = $('#startDate').val();
		var strtTime = $('#startTime').val();
		var endDate = $('#endDate').val();
		var endTime = $('#endTime').val();

		var verifiedDateTime = (strtDate && strtTime && endDate && endTime) ? true : false;
		
		if(!verifiedDateTime)
		alert_toast("Please set the Date and Time",'danger');

		if(verifiedVid && verifiedDateTime){
			start_load()
			$.ajax({
				url:'ajax.php?action=save_gallery',
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				success:function(resp){
					//console.log(resp);
					if(resp==1){
						alert_toast("Data successfully added",'success')
						setTimeout(function(){
							location.reload()
						},1500)
					}
					else if(resp==2){
						alert_toast("Data successfully updated",'success')
						setTimeout(function(){
							location.reload()
						},1500)
					}
					else {
						alert_toast(resp,'warning')
						setTimeout(function(){
							location.reload()
						},1500)
					}
				}
			})
		}
		
	})
	$('.edit_gallery').click(function(){
		start_load();
		var cat = $('#manage-gallery');
		cat.get(0).reset();

		var endT = $(this).attr('data-endTime');
		// Convert the 24-hour time to 12-hour format
		var startTime = new Date("2000-01-01 " + $(this).attr('data-startTime')).toLocaleTimeString('en-US', {hour12: true, hour: 'numeric', minute: 'numeric'});
		var endTime = new Date("2000-01-01 " + $(this).attr('data-endTime')).toLocaleTimeString('en-US', {hour12: true, hour: 'numeric', minute: 'numeric'});

		cat.find("[name='id']").val($(this).attr('data-id'))
			.end().find("[name='title']").val($(this).attr('data-title'))
			.end().find("[name='shortDescription']").val($(this).attr('data-short_description'))
			.end().find("[name='course']").val($(this).attr('data-course'))
			.end().find("[name='category']").val($(this).attr('data-category'))
			.end().find("[name='startDate']").val($(this).attr('data-startDate'))
			.end().find("[name='startTime']").val($(this).attr('data-startTime'))
			.end().find("[name='endDate']").val($(this).attr('data-endDate'))
			.end().find("[name='endTime']").val($(this).attr('data-endTime'))
			.end().find("#strtD").text($(this).attr('data-startDate'))
			.end().find("#strtT").text(startTime)
			.end().find("#endD").text($(this).attr('data-endDate'))
			.end().find("#endT").text(endTime);
		
		$('#editStatus').val('1');
		end_load();
		scrollToTop();
	});


	$('#btnCancel').click(function(){
		$('#videoFile').prop("required", false);
		$('#certFile').prop("required", false);
		$('#editStatus').val('0');
		$('#strtD').text('');
		$('#strtT').text('');
		$('#endD').text('');
		$('#endT').text('');
	});

	$('.delete_gallery').click(function(){
		_conf("Are you sure to delete this data?","confirmDelete",[$(this).attr('data-id')])
	})
	function confirmDelete(id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_gallery',
			method:'POST',
			data:{id:id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
	//for categoryies
	$('#new_category').click(function(){
		uni_modal("New Entry","manage_category.php",'mid-small')
	})
	$('.edit_category').click(function(){
		uni_modal("Edit Category","manage_category.php?id="+$(this).attr('data-id'),'mid-small')
	})
	$('.delete_category').click(function(){
		_conf("Are you sure to delete this category?","delete_category",[$(this).attr('data-id')])
	})
	
	$('#startDate').on('change', function(){
		$('#strtD').text($('#startDate').val());
	});
	$('#startTime').on('change', function(){
		var twelveHourTime = convertTo12HourFormat($('#startTime').val());
		$('#strtT').text(twelveHourTime);
	});
	$('#endDate').on('change', function(){
		$('#endD').text($('#endDate').val());
	});
	$('#endTime').on('change', function(){
		var twelveHourTime = convertTo12HourFormat($('#endTime').val());
		$('#endT').text(twelveHourTime);
	});

	function delete_category($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_category',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}

	function addEvaluation(id){
		uni_modal("Add Evaluation","evaluation.php?id="+id,'mid-large')
	}

	let mybutton = document.getElementById("toTopBtn");
	mybutton.addEventListener("click", scrollToTop);
	
	window.onscroll = function() {scrollFunction()}; // When the user scrolls down 20px from the top of the document, show the button
	
	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	// Scroll to the top of the page
	function scrollToTop() {
		window.scrollTo({
			top: 0,
			behavior: "smooth"
		});
	}

	function convertTo12HourFormat(militaryTime) {
		// Split the military time into hours and minutes
		var timeArray = militaryTime.split(':');
		var hours = parseInt(timeArray[0], 10);
		var minutes = timeArray[1];

		// Determine whether it's AM or PM
		var period = hours >= 12 ? 'PM' : 'AM';

		// Convert hours to 12-hour format
		hours = hours % 12;
		hours = hours ? hours : 12; // Handle midnight (0 hours)

		// Format the time in 12-hour format
		var twelveHourTime = hours + ':' + minutes + ' ' + period;

		return twelveHourTime;
	}

</script>