<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM accounts where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
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
        width: 95px;
        height: 95px;
        border-radius: 50%;
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
   
    .custom-input{
        text-align: start;
        width: 75%;
        background: transparent !important;
        border: none;
    }
	.custom-form{
        display: flex;
        align-items: center;
    }
    .control-label{
        text-align: start;
        width: 25%;
    }
	/*.modal-body{
		padding: 0rem;
	}*/
</style>
<form action="" id="manage-student">
    <header class="masthead">
        <div class="container-fluid h-100">
            
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end page-title">
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
    										 <img src="<?php echo isset($img[$id]) && is_file($fpath.'/'.$img[$id]) ? $fpath.'/'.$img[$id] :''?>?v=<?php echo time()?>" class="gimg" id="cimg" alt="">
    									</div>
	                            </center>
	                        </div>
	                    </div>                        
                    </div>
                </div>
            </div>
        </header>
            <div class="container">
               <div class="col-lg-12">
                   <div class="card mb-4">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="col-md-12 ">
                                        <div class="row custom-form-group">
                                        	<input type="hidden" name="id" value="<?php echo $id?>">
										    <?php $mName = !empty($middlename) ? strtoupper($middlename[0]) . '.' : ',';?>
                                            <div class="col-md-12 custom-form">
                                                <span class="control-label">Name:</span>
                                                <input type="text" class="form-control custom-input" name="lastname" readonly value="<?php echo ucfirst($firstname) . ' ' .$mName . ' ' . ucfirst($lastname) ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 custom-form">
                                                <span class="control-label">Gender:</span>
                                                <input type="text" class="form-control custom-input" name="gender" readonly value="<?php echo ucfirst($gender) ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 custom-form">
                                                <span  class="control-label">Address:</span>
                                                <input type="text" class="form-control custom-input" name="address" required value="<?php echo $address ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 custom-form">
                                                <label for="" class="control-label">Year & Section: </label>
                                                <input type="text" class="form-control custom-input" readonly value="<?php echo ucfirst($year) . ' - ' . $section ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 custom-form">
                                                <?php 
                                                    $qry = $conn->query("SELECT * FROM courses where id = $course");
                                                    $row=$qry->fetch_assoc();
                                                ?>
                                                <label for="" class="control-label">Course: </label>
                                                <input type="text" class="form-control custom-input" readonly value="<?php echo ucfirst($row['course'])?>">
                                                
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 custom-form">
                                                <span  class="control-label">Phone Number</span>
                                                <input type="Number" class="form-control custom-input" name="number" readonly value="<?php echo $number ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 custom-form">
                                                <span class="control-label">Email</span>
                                                <input type="email" class="form-control custom-input" name="email" readonly value="<?php echo $email ?>">
                                            </div>
                                        </div>
                                        <div id="msg"></div>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
    </form>
<script>
	$('.text-jqte').jqte();
    $('#submit').hide();

    function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

	$('#manage-student').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=update_account',
			method:'POST',
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
						location.reload(true);
					},1000)
				}
			}
		})
	})
</script>