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
				<div class="card">
					<div class="card-header">					
						<b>Categories</b>
						<span class="">
							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_category">
						<i class="fa fa-plus"></i> New Entry</button>
						</span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<colgroup>
								<col width="5%">
								<col width="40%">
								<col width="20%">
								<col width="20%">
								<col width="15%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Name</th>
									<th class="">Date Created</th>
									<th class="">Date Updated</th>
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
										 <p> <b><?php echo date("M d, Y h:i A",strtotime($row['date_created'])) ?></b></p>
									</td>
									<td>
										 <p> <b><?php if(!empty($row['date_updated'])){
										 	echo date("M d, Y h:i A",strtotime($row['date_updated']));
										 }; ?></b></p>
									</td>
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
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	$('#new_category').click(function(){
		uni_modal("New Entry","manage_category.php",'mid-small')
	})
	$('.edit_category').click(function(){
		uni_modal("Edit Category","manage_category.php?id="+$(this).attr('data-id'),'mid-small')
	})
	$('.delete_category').click(function(){
		_conf("Are you sure to delete this category?","delete_category",[$(this).attr('data-id')])
	})
	
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
</script>