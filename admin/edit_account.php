<?php include 'db_connect.php'; ?>
<?php
	if(isset($_GET['id'])){
		$qry = $conn->query("SELECT * from accounts where id = ".$_GET['id']);
		foreach($qry->fetch_array() as $k => $val){
			$$k=$val;
		}
	}
?>
<style>
    .masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
    img#cimg{
        max-height: 10vh;
        max-width: 6vw;
    }
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
</style>
        <header class="masthead" style="margin-bottom: 100px ;">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Edit Account</h3>
                        <hr class="divider my-4" />

	                    <div class="col-md-12 justify-content-center">
	                    </div>
	                    <div class="row form-group justify-content-center">
	                    	<div class="col-md-4">
	                    		<center>
    	                        	<?php
    		                        	$img = array();
    	                          		$fpath = 'assets/uploads/';
    									$files= is_dir($fpath) ? scandir($fpath) : array();
    									foreach($files as $val){
    										if(!in_array($val, array('.','..'))){
    											$n = explode('_',$val);
    											$img[$n[0]] = $val;
    										}
    									}
    	                        	?>
    	                        		<div class="avatar" >
    										 <img src="<?php echo isset($img[$id]) && is_file($fpath.'/'.$img[$id]) ? $fpath.'/'.$img[$id] :'' ?>" class="gimg" alt="">
    									</div>
    	                            <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))" >
    	                            <div class="row form-group justify-content-center" style="margin-top: 15px;">
    	                            </div>
	                            </center>
	                        </div>
	                    </div>                        
                    </div>
                </div>
            </div>
        </header>
            <div class="container mt-3 pt-2">
               <div class="col-lg-12">
                   <div class="card mb-4">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <form action="" id="update_account">
                                        <div class="row form-group">
                                        	<input type="hidden" name="id" value="<?php echo $id?>">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" required value="<?php echo ucfirst($lastname) ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" required value="<?php echo ucfirst($firstname) ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" value="<?php echo ucfirst($middlename) ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" required >
                                                    <option <?php echo $gender == 'Male' ? 'selected' : '' ?>>Male</option>
                                                    <option <?php echo $gender == 'Female' ? 'selected' : '' ?>>Female</option>
                                                </select>
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" required value="<?php echo $email ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                                <small><i>Leave this blank if you dont want to change your password</i></small>
                                            </div>
                                        </div>
                                        
                                        <div id="msg"></div>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary ">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
                
            </div>


<script>
   $('.datepickerY').datepicker({
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('.btn_cancel').click(function(){
	location.href ="./index.php?page=students";
})
$('#update_account').submit(function(e){
    e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=update_account',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				console.log(resp);
            if(resp == 1){
                alert_toast("Data successfully saved",'success')
				setTimeout(function(){
					location.href ="./index.php?page=students"
				},1500)
            }else{
                $('#msg').html('<div class="alert alert-danger">Invalid input!</div>')
                end_load()
            }
        }
    })
})
</script>