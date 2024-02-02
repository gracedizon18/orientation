<?php include 'admin/db_connect.php'?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from accounts where id = ".$_GET['id']);
	foreach($qry->fetch_array() as $k => $val){
		$$k=$val;
	}
}
?>
<style type="text/css">
	
	.avatar {
	    display: flex;
	    border-radius: 100%;
	    width: 100px;
	    height: 100px;
	    align-items: center;
	    justify-content: center;
	    border: 3px solid;
	    padding: 5px;
	}
	.avatar img {
	    max-width: calc(100%);
	    max-height: calc(100%);
	    border-radius: 100%;
	}
	p{
		margin:unset;
	}
	p{
  		color: white;
	}
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: block
	}
</style>
<header class="masthead">
	<div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-4 align-self-end mb-4 pt-2 page-title">
                    	<!-- <h4 class="text-center text-white"><b><?php echo ucwords($title) ?></b></h4> -->
                        <hr class="divider my-4" />
                     
                    </div>
                    
                </div>
            </div>
</header>
<div class="container-field">
	<div class="col-lg-12">
		<div>
			<center>
				<div class="avatar">
					<?php
					$img = array();
                    $fpath = 'admin/assets/uploads/';
					$files= is_dir($fpath) ? scandir($fpath) : array();
					foreach($files as $val){
						if(!in_array($val, array('.','..'))){
							$n = explode('_',$val);
							$img[$n[0]] = $val;
						}
					}

					?>
				 <img src="<?php echo isset($img[$id]) && is_file($fpath.'/'.$img[$id]) ? $fpath.'/'.$img[$id] :'' ?>" class="" alt="">
				</div>
			</center>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<p>Name: <b><?php echo $firstname . ' '. $lastname ?></b></p>
				<p>Gender: <b><?php echo $gender ?></b></p>
				<p>Email: <b><?php echo $email ?></b></p>

			</div>
			<div class="col-md-6">
				<p>Account Status: <b><?php echo $status == 1 ? '<span class="badge badge-primary">Verified</span>' : '<span class="badge badge-secondary">Unverified</span>' ?></b></p>
			</div>
		</div>
	</div>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-lg-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
			<?php if($status == 1): ?>
			<button class="btn float-right btn-primary update mr-2" data-status = '0' type="button" data-dismiss="modal">Unverify Account</button>
			<?php else: ?>
				<button class="btn float-right btn-primary update mr-2" data-status = '1' type="button" data-dismiss="modal">Verify Account</button>
			<?php endif; ?>
		</div>
	</div>
</div>
<script>
	$('.update').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=update_student_acc',
			method:"POST",
			data:{id:<?php echo $id ?>,status:$(this).attr('data-status')},
			success:function(resp){
				if(resp == 1){
					alert_toast("Student's account status successfully updated.")
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})
	})
</script>
