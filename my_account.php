<?php 
include 'admin/db_connect.php'; 
?>
<?php
    if(isset($_GET['id'])){
        $qry = $conn->query("SELECT * from accounts where id = ".$_GET['id']);
        foreach($qry->fetch_array() as $k => $val){
            $k=$val;
        }
    }
?>
<style>
    .masthead{
        min-height: 40vh !important;
        height: 40vh !important;
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
    .glass{
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
		border-radius: 20px;
		border:1px solid rgba(255, 255, 255, 0.18);
		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
	}
</style>
    <form action="" id="update_account">
        <header class="masthead">
            <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-12 align-self-end mb-4 page-title">
	                    <div class="row form-group justify-content-center">
	                    	<div class="col-md-4">
                            <center>
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
                                    <div class="avatar" >
                                            <img src="<?php echo isset($img[$_SESSION['bio']['id']]) && is_file($fpath.'/'.$img[$_SESSION['bio']['id']]) ? $fpath.'/'.$img[$_SESSION['bio']['id']] :'' ?>" class="gimg" alt="">
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
        <?php 
                $qry = $conn->query("SELECT * From accounts where id = ".$_SESSION['bio']['id']);
                $row = $qry->fetch_assoc();
            ?>
            <div class="container mt-3 pt-2 ">
               <div class="col-lg-12">
                   <div class="card mb-4 glass">
                        <div class="card-body ">
                            <div class="container-fluid" style="color: whitesmoke">
                                <div class="col-md-12">
                                        <div class="row form-group">
                                        	<input type="hidden" name="id" value="<?php echo $row['id']?>">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" required value="<?php echo ucfirst($row['lastname']) ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" required value="<?php echo ucfirst($row['firstname']) ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" value="<?php echo ucfirst($row['middlename']) ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" required >
                                                    <option <?php echo $row['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                                    <option <?php echo $row['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Address</label>
                                                <input type="text" class="form-control" name="address" required value="<?php echo $row['address'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Phone Number</label>
                                                <input type="Number" class="form-control" name="number" required value="<?php echo $row['number'] ?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Year</label>
                                                <select class="custom-select" name="year" required>
                                                    <option <?php echo $row['year'] == '1st Year' ? 'selected' : '' ?>>1st Year</option>
                                                    <option <?php echo $row['year'] == '2nd Year' ? 'selected' : '' ?>>2nd Year</option>
                                                    <option <?php echo $row['year'] == '3rd Year' ? 'selected' : '' ?>>3rd Year</option>
                                                    <option <?php echo $row['year'] == '4th Year' ? 'selected' : '' ?>>4th Year</option>
                                                    <option <?php echo $row['year'] == '5th Year' ? 'selected' : '' ?>>5th Year</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Section</label>
                                                <select class="custom-select" name="section" required>
                                                    <option <?php echo $row['section'] == 'A' ? 'selected' : '' ?>>A</option>
                                                    <option <?php echo $row['section'] == 'B' ? 'selected' : '' ?>>B</option>
                                                    <option <?php echo $row['section'] == 'C' ? 'selected' : '' ?>>C</option>
                                                    <option <?php echo $row['section'] == 'D' ? 'selected' : '' ?>>D</option>
                                                    <option <?php echo $row['section'] == 'E' ? 'selected' : '' ?>>E</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Course List</label>
                                                <select class="custom-select" name="course" required>
                                                    <?php 
                                                    $qry = $conn->query("SELECT * FROM courses");
                                                    
                                                    while($rows=$qry->fetch_assoc()):
                                                    ?>
                                                    <option value="<?php echo $rows['id']?>" <?php echo trim($rows['course']) == $row['course'] ? 'selected' : '' ?>><?php echo $rows['course']?></option>
                                                <?php endwhile;?>
                                                </select>
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" required value="<?php echo $row['email'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" class="form-control" name="password">
                                                <small><i>Leave this blank if you dont want to change your password</i></small>
                                            </div>
                                            
                                        </div>
                                        <div id="msg"></div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Update Account</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
    </form>


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
$('#update_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=update_account',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            console.log(resp);
            if(resp == 1){
                alert_toast("Account successfully updated.",'success');
                setTimeout(function(){
                 location.reload()
                },700)
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                end_load()
            }
        }
    })
})
</script>