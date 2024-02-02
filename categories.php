<?php include 'admin/db_connect.php' ?>
<?php
	if(isset($_GET['id'])){
		$qry = $conn->query("SELECT * from categories where id = ".$_GET['id']);
		foreach($qry->fetch_array() as $k => $val){
			$$k=$val;
		}
	}
?>
<style type="text/css">
	body{
		font-family: 'Century Gothic', sans-serif;
	}
	.fill{
		border-radius: 5px;
		cursor: pointer;
		padding: 0rem 1rem 1rem 0rem;
	}
	video{
		width: 100% !important;
  		height: 200px;
	}
	span{
		padding-bottom: 1rem;
	}
	.font-title{
		font-family: fantasy;
		font-size: larger;
	}
	#uni_modal, .modal-footer{
		display: none;
	}
	.main-panel{
		background-color:#E9F1FA;
		color: white;
		border-radius: 10px 10px 0px 0px;
	}
	.top-radius{
		border-radius: 10px 10px 0px 0px;
	}
	.font-title{
		font-family: 'Kanit', sans-serif;
    	color:#1e375a;
		letter-spacing: 2.5px;
	}
	.display-none{
		display:none;
	}
	.card-body{
		color:black; 
		/* background-color:#E9F1FA; */
	}
	.medium-title{
		font-weight: 600;
		font-size: 2.5vh;
		letter-spacing: 1.5px !important;
	}
	.row-column{
		display: flex;
		flex-direction: column;
		flex-wrap: wrap;
		margin-right: -15px;
		margin-left: -15px
	}
	.form-group-label{
		padding-left: 1rem;
	}
	small{
		font-weight: 800;
	}
	.modal-content{
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
		border-radius: 20px;
		border:1px solid rgba(255, 255, 255, 0.18);
		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
	}
	#comment{
		padding: 1rem;
		width: 100%;
		border-radius: 10px;
		border-color: #007bff;
		border: none;
    	outline: none;
	}
	.custom-content{
		border-radius: 10px;
   		background-image: linear-gradient(5deg, #3075bd, transparent);
	}
	.modal-btn{
		margin: 0px 10px 0px 10px;
	}
	.top-radius{
		border: none;
    	outline: none;
	}
</style>
<div class="container-fluid">
	<form action="" id="select_categories">
		<div class="card top-radius">
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>">
			<input type="hidden" name="idUser" id="idUser" value="<?php echo isset($_GET['idUser']) ? $_GET['idUser']:'' ?>">
			<input type="hidden" name="idVideo" id="idVideo" value="">
			<div class="card-header top-radius bg-primary justify-content-center text-center">
				<h4 class="font-title" style="margin-bottom:0px;font-size:3.5vh;color:whitesmoke;"><?php echo strtoupper($category);?></h4>
			</div>
			<div class="card-body ">				
				<div class="col-lg-12">
					<div class="row">
							<?php 
								$vid_path = 'admin/assets/uploads/videos/';
								$qry = $conn->query("SELECT * from gallery where category = '$category'");
								$i=0;
								while($row=$qry->fetch_assoc()):
									$vid = $vid_path.$row['video_url'];
									if($row['video_url'] != null){
							?>
								<div class="col-md-4">
									<input type="hidden" id="vid_id<?php echo $i;?>" value="<?php echo $row['id'];?>">
									<div class="row-column justify-content-center">
										<div class="form-group">
											<div class="video-categories">
												<video class="fill" preload="metadata">
													<source src="<?php echo $vid_path.$row['video_url'].'#t=4.5'; ?>" type="video/mp4">
												</video>
											</div>
										</div>
										<div class="form-group justify-content-center text-center">
											<span class="font-title medium-title" style="font-size: 1em;"><?php echo strtoupper($row['title']);?></span>
										</div>
										<div class="form-group-label justify-content-center text-left">
											
											<small style="font-size: 0.95em;font-weight: 600;">Posted Date: </small>
											<label for=""><?php echo date("M d, Y",strtotime($row['created']));?></label>
										</div>
										<div class="form-group-label justify-content-center text-left">
											<small style="font-size: 0.95em;font-weight: 600;">Short Description: </small>
											<label for=""><?php echo $row['shortDescription'];?></label>
										</div>
										<?php 
											$idVideo = $row['id'];
											$idUser = isset($_GET['idUser']) ? $_GET['idUser']:'';
											$request = $conn->query("SELECT * from request where idUser = $idUser and idVideo = $idVideo");
											if($request->num_rows > 0){
												$dat = $request->fetch_assoc();
												if($dat['status'] == 1){
										?>
											<div class="form-group-label justify-content-center text-center">
												<button class="btn btn-danger" type="button">Pending Request</button>
												<button class="btn btn-sm btn-primary comment" type="button" style="height: 2.8em;" data-id="<?php echo $idVideo ?>" data-toggle="modal" data-target="#myModal" style="color:white">Comment</button>
											</div>
											<?php }else{ ?>
												<div class="form-group-label justify-content-center text-center">
													<button class="btn btn-success" type="button" id="btnJoin<?php echo $i?>" onclick="join(<?php echo $row['id'] . ',' .$id. ',' .$idUser?>)">Join</button>
													<button class="btn btn-sm btn-primary comment" type="button" style="height: 2.8em;" data-id="<?php echo $idVideo ?>" data-toggle="modal" data-target="#myModal" style="color:white">Comment</button>
												</div>
											<?php } ?>
										<?php }else{ ?>
											<div class="form-group-label justify-content-center text-center">
												<button class="btn btn-danger" type="button" id="btnRequest<?php echo $i?>" onclick="request('<?php echo $row['title']?>',<?php echo $i?>)">Request</button>
												<button class="btn btn-danger" type="button" id="btnPending<?php echo $i?>" hidden>Pending Request</button>
												<!-- <input class="btn bg-primary" style="color:white" id="comment" type="button" data-toggle="modal" data-target="#myModal" value="Comment"> -->
												<button class="btn btn-sm btn-primary comment" type="button" style="height: 2.8em;" data-id="<?php echo $idVideo ?>" data-toggle="modal" data-target="#myModal" style="color:white">Comment</button>
											</div>
										<?php }?>
					                </div>
				                </div>

		                    <?php $i++;} ?>
		                <?php endwhile; ?>
                    </div>
                </div>
			</div>			
		</div>
		<div class="row" style="justify-content: flex-end; margin: 1px;padding-top: 1rem;">
			<button class="button btn btn-danger btn-sm" >Close</button>
        </div>
		<div class="modal fade" id="myModal">
			<div class="modal-dialog custom-modal" style="width: 400px !important;">
				<div class="modal-content custom-content">
					<!-- Modal Header -->
					<!-- Modal body -->
					<div class="modal-body">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="control-label">Enter your comment</label>
							</div>
							<div class="col-md-12">
								<textarea name="comment" id="comment" cols="20" rows="5"></textarea>
							</div>
						</div>
						<div class="row form-group" style="padding-left: 1em;">
							<button type="button" class="btn btn-success modal-btn" onclick="sumbit()" data-dismiss="modal">Submit</button>
							<button type="button" class="btn btn-danger modal-btn" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	
</div>
<script type="text/javascript">
	let indexBtn = 0;
	$(document).ready(function(){
		$('.modal-header').addClass('display-none');
		$('.modal-header').css('color',"white");
	})
	
	function request(title,index) {
		var idUser = $('#idUser').val();
		var idVideo = $('#vid_id'+index).val();
		var data = { idUser: idUser, idVideo:idVideo, title: title };
		indexBtn = index;
		$.ajax({
			url: 'admin/ajax.php?action=request',
			data: JSON.stringify(data),
			cache: false,
			contentType: 'application/json',
			processData: false,
			method: 'POST',
			success: function (resp) {
				//console.log(resp);
				if(resp == 1){
					alert_toast("Requested successfully",'success')
					$('#btnRequest'+indexBtn).attr("hidden", true);
					var btn = '#btnPending'+indexBtn;
					$(btn).removeAttr("hidden");
					setTimeout(function(){
						// location.reload()
					},1000)
				}else{
					alert_toast("Request failed",'warning')
					setTimeout(function(){
						// location.reload()
					},1500)
				}
			}
		});
	}
	function join(id,cat_id,idUser){
		location.href ="index.php?page=view_video&id="+id+"&category_id="+cat_id+"&idUser="+idUser;
	}

	$('.comment').click(function(){
		$("#idVideo").val([$(this).attr('data-id')]);
	})
	function sumbit(){
		var idUser = $('#idUser').val();
		var idVideo = $('#idVideo').val();
		var comment = $('#comment').val();
		var data = { idUser: idUser, idVideo:idVideo, comment:comment};

		$.ajax({
			url: 'admin/ajax.php?action=submit_comment',
			data: JSON.stringify(data),
			cache: false,
			contentType: 'application/json',
			processData: false,
			method: 'POST',
			success: function (resp) {
				// console.log(JSON.parse(resp));
				console.log(resp);
				if(resp == 1){
					alert_toast("Comment successfully",'success')
					setTimeout(function(){
						// location.reload()
					},2000)
				}else{
					alert_toast("Comment failed",'danger')
					setTimeout(function(){
						// location.reload()
					},2500)
				}
			}
		});
	}

	
</script>
