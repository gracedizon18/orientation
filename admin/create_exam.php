<?php include 'db_connect.php' ?>

<style>
	.modal-dialog{
    	overflow-y: initial !important
	}
	.modal-body{
		height: 60vh;
		overflow-y: auto;
	}
	.container-fluid{
		border-bottom: 1px solid #007bff;
    	padding: 15px 15px 15px 15px;
	}
	
</style>

<div class="container">
	<form action="" id="manage_exam" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>">
				<input type="hidden" name="examName" value=<?php echo isset($_GET['examName']) ? $_GET['examName']:'' ?>>
				<input type="hidden" name="items" value=<?php echo isset($_GET['items']) ? $_GET['items']:'' ?>>

		<?php

		$items = (int)$_GET['items'];

		for($i = 1; $i<=$items; $i++){
		?>
		<div class="container-fluid">
			<div class="row form-group">
				<div class="col-md-12">
					<label class="control-label" style="font-weight: 900;">Question number <?php echo $i?></label>
					<input type="text" name="question[<?php echo $i?>]" class="form-control" value="" required="">
				</div>			
			</div>
			<div class=" row form-group">
				<div class="col-md-6">
					<label class="control-label">A.</label>
					<input type="text" class="form-control" name="a[<?php echo $i?>]" id="a<?php echo $i?>"required="">
				</div>
				<div class="col-md-6">
					<label class="control-label">B.</label>
					<input type="text" class="form-control" name="b[<?php echo $i?>]" id="b<?php echo $i?>"required="">
				</div>
			</div>
			<div class=" row form-group">
				<div class="col-md-6">
					<label class="control-label">C.</label>
					<input type="text" class="form-control" name="c[<?php echo $i?>]" id="c<?php echo $i?>"required="">
				</div>
				<div class="col-md-6">
					<label class="control-label">D.</label>
					<input type="text" class="form-control" name="d[<?php echo $i?>]" id="d<?php echo $i?>"required="">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<label class="control-label">Answer to Question number: <?php echo $i?></label>
					<select class="form-control" name="answer[<?php echo $i?>]" id=<?php echo $i?>required="">
						<option value="-1">- Please Select -</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>
				</div>
			</div>
		</div>
		<?php } ?>
	</form>
</div>
<style>
	.error{
		border: 2px solid var(--red) !important;
	}
</style>
<script>
	var data = $("#data").val();
	$(function() {
		console.log(data);
	});

	// $('.text-jqte').jqte();

	$('#manage_exam').submit(function(e){
		e.preventDefault();
		if(!validate("manage_exam")){
			start_load();
			$.ajax({
				url:'ajax.php?action=save_exam',
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				success:function(resp){
					if(resp == 1){
						alert_toast("Data successfully saved.",'success')
						setTimeout(function(){
							location.reload()
						},1000)
					}else{
						alert_toast("Data failed to saved",'warning')
						setTimeout(function(){
							location.reload()
						},1500)
					}
				}
			})
		}
	})
	
</script>