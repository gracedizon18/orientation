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
	
	/*.modal-body{
		padding: 0rem;
	}*/
</style>
<form action="" id="manage-student">
    <header class="masthead">
        <div class="container-fluid h-100">
            
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end mb-4 page-title">
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
                                            <div class="col-md-2">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" required >
                                                    <option <?php echo $gender == 'Male' ? 'selected' : '' ?>>Male</option>
                                                    <option <?php echo $gender == 'Female' ? 'selected' : '' ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Address</label>
                                                <input type="text" class="form-control" name="address" required value="<?php echo $address ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Phone Number</label>
                                                <input type="Number" class="form-control" name="number" required value="<?php echo $number ?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Year</label>
                                                <select class="custom-select" name="year" required>
                                                    <option <?php echo $year == '1st Year' ? 'selected' : '' ?>>1st Year</option>
                                                    <option <?php echo $year == '2nd Year' ? 'selected' : '' ?>>2nd Year</option>
                                                    <option <?php echo $year == '3rd Year' ? 'selected' : '' ?>>3rd Year</option>
                                                    <option <?php echo $year == '4th Year' ? 'selected' : '' ?>>4th Year</option>
                                                    <option <?php echo $year == '5th Year' ? 'selected' : '' ?>>5th Year</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Section</label>
                                                <select class="custom-select" name="section" required>
                                                    <option <?php echo $section == 'A' ? 'selected' : '' ?>>A</option>
                                                    <option <?php echo $section == 'B' ? 'selected' : '' ?>>B</option>
                                                    <option <?php echo $section == 'C' ? 'selected' : '' ?>>C</option>
                                                    <option <?php echo $section == 'D' ? 'selected' : '' ?>>D</option>
                                                    <option <?php echo $section == 'E' ? 'selected' : '' ?>>E</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Department List</label>
                                                <select class="custom-select" name="course" required>
                                                    <?php 
                                                    $qry = $conn->query("SELECT * FROM courses");
                                                    
                                                    while($row=$qry->fetch_assoc()):
                                                    ?>
                                                    <option value="<?php echo $row['id']?>" <?php echo trim($row['course']) == $course ? 'selected' : '' ?>><?php echo $row['course']?></option>
                                                <?php endwhile;?>
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
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
    </form>
<script>
	$('.text-jqte').jqte();
    

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