<?php 
include 'admin/db_connect.php'; 
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
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    .glass {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 20px;
        border:1px solid rgba(255, 255, 255, 0.18);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
    }
    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    label{
        color: white;
    }
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Create Account</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
            <div class="container mt-3 pt-2">
               <div class="col-lg-12">
                   <div class="card mb-4 glass">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <form action="" id="create_account">
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">First Name</label>
                                                <input type="text" class="form-control" name="firstname" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" >
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-2">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" required>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Address</label>
                                                <input type="text" class="form-control" name="address" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Phone Number</label>
                                                <input type="Number" class="form-control" name="number" required>
                                            </div>
                                            
                                        </div>    
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Year</label>
                                                <select class="custom-select" name="year" required>
                                                    <option>1st Year</option>
                                                    <option>2nd Year</option>
                                                    <option>3rd Year</option>
                                                    <option>4th Year</option>
                                                    <option>5th Year</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Section</label>
                                                <select class="custom-select" name="section" required>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">Course List</label>
                                                <select class="custom-select" name="course" required>
                                                    <?php 
                                                    $qry = $conn->query("SELECT * FROM courses");
                                                    while($row=$qry->fetch_assoc()):
                                                    ?>
                                                    <option value="<?php echo $row['id']?>"><?php echo $row['course']?></option>
                                                <?php endwhile;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                        </div>
                                        <div class="row form-group justify-content-center">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                                                <div class="row form-group justify-content-center" style="margin-top: 15px;">
                                                    <div class="col-md-3">
                                                        <img src="" alt="" id="cimg">
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                        <div id="msg"></div>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Create Account</button>
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
$('#create_account').submit(function(e){

    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=signup',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            console.log(resp);
            if(resp == 1){
                alert_toast("Data successfully Save",'success')
                setTimeout(function(){
                    location.replace('index.php')
                },1500)
            }else{
                $('#msg').html('<div class="alert alert-danger">Email already exist.</div>')
                end_load()
            }
        }
    })
})
</script>