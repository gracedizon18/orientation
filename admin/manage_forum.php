<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM forum_topics where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<div class="container-fluid">
	<form action="" id="manage-forum">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
				<input type="hidden" name="" value="<?php echo $qry['name'] ?>">
		<div class="row form-group">
			<div class="col-md-6">
				<label class="control-label">Created by</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($name) ? $name:'' ?>">
			</div>
			<div class="col-md-6">
				<label class="control-label">Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo isset($title) ? $title:'' ?>">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label">Description</label>
				<textarea name="description" class="text-jqte"><?php echo isset($description) ? $description : '' ?></textarea>
			</div>
		</div>
	</form>
</div>

<script>
	$('.text-jqte').jqte();
	$('#manage-forum').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_forum',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				console.log(resp);
				if(resp == 1){
					alert_toast("Data successfully saved.",'success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})
	})
</script>