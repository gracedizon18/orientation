<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM categories where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<div class="container-fluid">
	<form action="" id="manage-category">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label">Category</label>
				<input type="text" name="category" class="form-control" value="<?php echo isset($category) ? $category:'' ?>">
			</div>
			
		</div>
		<div class=" row form-group">
				<div class="col-md-12">
					<label for="" class="control-label">Banner Image</label>
					<input type="file" class="form-control chose-file" name="banner" onchange="displayImg2(this,$(this))">
				</div>
			</div>
			<div class=" row form-group">
				<div class="col-md-6">
					<img src="<?php echo isset($banner) ? 'assets/uploads/categories-img/'.$banner :'' ?>" alt="" id="banner-field">
				</div>
			</div>
	</form>
</div>

<script>
	$('.text-jqte').jqte();
	$('#manage-category').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_category',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
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
	function displayImg2(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#banner-field').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
</script>