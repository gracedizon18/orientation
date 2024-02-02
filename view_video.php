<?php include 'admin/db_connect.php'; ?>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<script src="https://kit.fontawesome.com/687106e5c3.js" crossorigin="anonymous"></script>
<?php 
	$qry = $conn->query("SELECT * from gallery where id = ".$_GET['id']);
	foreach($qry->fetch_array() as $k => $val){
		$$k=$val;
	}

?>
<style>
    body{
        color:#fff;
    }
    .masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
    video{
        display: block;
        width: calc(75%);
    }
    .row-center{
        flex-direction: column;
        align-content: center;
        justify-content: flex-start;
        display: flex;
        flex-wrap: wrap;
    }
    .row-lr{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
    }
    .marg-top{
        margin-top: 1rem;
    }
    figure {
      box-shadow:
        0 2.8px 2.2px rgba(0, 0, 0, 0.034),
        0 6.7px 5.3px rgba(0, 0, 0, 0.048),
        0 12.5px 10px rgba(0, 0, 0, 0.06),
        0 22.3px 17.9px rgba(0, 0, 0, 0.072),
        0 41.8px 33.4px rgba(0, 0, 0, 0.086),
        0 100px 80px rgba(0, 0, 0, 0.12);
      width: 50%;
    }

figcaption {
  align-items: center;
  background: #eaeaea;
  display: grid;
  grid-gap: 1rem;
  grid-template-columns: auto min(115px);
  padding: 0.5rem;
  border-radius: 55px;
  margin: 0px 7px 0px 7px;
}

    .btn-play {
        border: 0;
        background: #e52e71;
        display: inline;
        color: white;
        order: 1;
        padding: .5rem;
        transition: opacity .25s ease-out;
        width: 100%;
    }
label {
  order: 2;
  text-align: center;
}

/* Fallback stuff */
progress[value] {
  appearance: none;
  border: none;
  border-radius: 3px;
  box-shadow: 0 2px 3px rgba(0, 0, 0,.25) inset;
  color: dodgerblue;
  display: inline;
  height: 15px;
  order: 1;
  position: relative;
  width: 100%;
  margin-left: 15px;
}

/* WebKit styles */
progress[value]::-webkit-progress-bar {
  background-color: whiteSmoke;
  border-radius: 3px;
  box-shadow: 0 2px 3px rgba(0, 0, 0,.25) inset;
}

progress[value]::-webkit-progress-value {
  background-image: linear-gradient(
    to right,
    #ff8a00, #e52e71
  );
  border-radius: 3px;
  position: relative;
  transition: width 1s linear;
}

/* Firefox styles */
progress[value]::-moz-progress-bar {
  background-image: -moz-linear-gradient(
    to right,
    #ff8a00, #e52e71
  );
  border-radius: 3px;
  position: relative;
  transition: width 1s linear;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn:hover {
  background-color: RoyalBlue;
  color: whitesmoke;
}
.fa-download{
    padding: 1px;
    margin-right: 2px;
}
*{
    font-family: 'Poppins', sans-serif !important;
}
.hide{
    display: none;
}
.row-mid{
    display: flex;
    justify-content: center;
    align-items: center;
}
.form-group label{
    margin: 0 0 0 0.5em;
}
.col-sm-3{
    padding: 0 0 0 0;
}
.form-item{
    padding-left: 3em;
    display: flex;
    align-items: center;
}
.form-group{
    margin: 0;
    
}
.group-box{
    margin: 5px;
    border:2px solid #0a1d42;
    background: #0a1d42;
    border-radius: 55px; 
}
.group-box a{
    font-size: 1.2em;
}
.row-mid label{
    color: #fff;
    font-size: 3vh;
    border:2px solid #0a1d42;
    background: #0a1d42;
    border-radius: 55px; 
    width: 55%;  
}
.row-mid input{
    color: #fff;
    font-size: 3vh;
    border:2px solid #0a1d42;
    background: #0a1d42;
    border-radius: 55px; 
    width: 55%;   
}
.row-mid input:hover{
    color: RoyalBlue;
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
	<header class="masthead">
		<?php $qry = $conn->query("SELECT * from gallery where id = ".$id); 
		$row = $qry->fetch_assoc();
        $vid_path = 'admin/assets/uploads/videos/';
        date_default_timezone_set('Asia/Manila');
        $currentDate = date("Y-m-d");
		?>
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end page-title">
                    <h4 class="text-center text-white" style="margin-top: 1rem;"><?php echo $row['title'] ?></h4>
                    <hr class="divider "style="max-width: calc(30%); margin-top: 0px !important;" />
                </div>
            </div>
        </div>
    </header>
    <body>
    <div class="container-fluid">
        <div class="container mt-3 pt-2">
            <div class="col-lg-12">
                <div class="card mb-4 glass">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="col-md-12">
                            <input type="hidden" id="vid_id" value="<?php echo $id;?>">
                            <input type="hidden" id="user_id" value="<?php echo $_SESSION['bio']['id'];?>">
                            <input type="hidden" id="title" value="<?php echo $row['title'];?>">
                            <input type="hidden" id="_date" value="<?php echo $currentDate;?>">
                            <?php $middlename = !empty($_SESSION['bio']['middlename']) ? strtoupper($_SESSION['bio']['middlename'][0]) . '.' : ',';?>
                            <input type="hidden" id="userName" value="<?php echo $_SESSION['bio']['firstname'] . " " .$middlename ." " , $_SESSION['bio']['lastname'];?>">

                            <div class="row row-center form-group">
                                <video id="video_player" class="fill" preload="metadata" controls controlslist = "nodownload">
                                    <source src="<?php echo $vid_path.$row['title'].'.mp4'.'#t=5'; ?>" type="video/mp4">
                                </video>
                                <div class="row-center">
                                    <?php 
                                        $qry = $conn->query("SELECT * FROM participants where video_id = ".$id." and user_id =".$_SESSION['bio']['id']);
                                        $req = $qry->fetch_assoc();
                                        $stat = "incomplete";
                                        if($req != null){
                                            $stat = $req['status'];
                                        }

                                        $q = $conn->query("SELECT id FROM exams where idVideo = ".$id);
                                        $idEx = $q->fetch_assoc();

                                        if(!empty($idEx)){
                                            $query = $conn->query("SELECT * FROM exam_result where idUser = ".$_GET['idUser']." and idExam = ".$idEx['id']);
                                            $result = $query->fetch_assoc();
                                            
                                            $eval = $conn->query("SELECT * FROM evaluation where idUser = ".$_GET['idUser']." and idVideo = ".$id);
                                            $num = $eval->num_rows;
                                            $evaluation = $eval->fetch_assoc();
                                    ?>
                                    <input type="hidden" id="resultStatus" value="<?php echo isset($result['status']) ? $result['status']:'';?>">
                                    <input type="hidden" id="status" value="<?php echo $stat?>">
                                    <input type="hidden" id="evalNum" value="<?php echo $num?>">
                                    <input type="hidden" id="evalDate" value="<?php echo date('Y-m-d', strtotime($evaluation['datePosted']));?>">

                                    <?php 
                                        }
                                    ?>
                                    <div class="row-center" style="width: calc(100%);">
                                    <div class="col-md-12 marg-top" id="hs-exam" style="display: block;">
                                        <div class="row-center" style="margin-bottom: 10px;">
                                            <button  class="align-items-center btn btn-primary" style="width: 250px" onclick="take_exam()">Play Video</button>
                                        </div>
                                    </div>
                                    <div class="marg-top col-md-12" id="hs-progress" style="display: none;" >
                                        <figcaption>
                                            <label id="timer" for="progress" role="timer"></label>
                                            <progress id="progress" max="100" value="0">Progress</progress>
                                        </figcaption>
                                        
                                    </div>
                                    <input type="hidden" id="vid_status" value="incomplete">
                                    <div class="col-lg-12" style="padding-top: 1px;">
                                        <div class="group-box row" style="height: 2.2rem;">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6 form-item">
                                                <div class="form-group" style="display: block;">
                                                    <label style="margin: 0; color: RoyalBlue; font-weight: 600;">Status</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-box row">
                                            <div class="col-md-6">
                                                <div class="row-mid">
                                                    <label id="vidLabel">Video</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-item">
                                                <div class="form-group vid-inc" style="display: block;">
                                                    <i class="far fa-times-circle fa-lg" style="color: #dc3545;"></i>
                                                    <label for="">Incomplete</label>
                                                </div>
                                                <div class="form-group vid-com " style="display: none;">
                                                    <i class="far fa-check-circle fa-lg" style="color: seagreen;"></i>
                                                    <label for="">Complete</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-box row">
                                            <div class="col-md-6">
                                                <div class="row-mid">
                                                    <input id="btnExam" type="button" onclick="takeExam()" value="Take Exam">
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-item" style="justify-content: space-between;">
                                                <div class="form-group exam-inc" style="display: block;">
                                                    <i class="far fa-times-circle fa-lg" style="color: #dc3545;"></i>
                                                    <label>Incomplete</label>
                                                </div>
                                                <div class="form-group exam-com " style="display: none;">
                                                    <i class="far fa-check-circle fa-lg" style="color: seagreen;"></i>
                                                    <label>Complete</label>
                                                </div>
                                                <?php  if($result != null){ ?>
                                                <div class="form-group exam-result " style="display: block;">
                                                    <span style="font-weight: 600;font-size: 0.80em;"><?php echo $result['result'];?></span>
                                                    <?php if($result['status'] == "failed"){  ?>
                                                        <label style="color: #dc3545;"><?php echo strtoupper($result['status']);?></label>
                                                    <?php }else{?>
                                                        <label style="color: seagreen;"><?php echo strtoupper($result['status']);?></label>
                                                    <?php }?>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php if($result != null){?>
                                        <?php if($result['status'] == "passed"){?>
                                        <div class="group-box row evaluation">
                                            <div class="col-md-6">
                                                <div class="row-mid">
                                                    <input id="btnEvaluation" type="button" onclick="takeEvaluation()" value="Evaluation" style="color:#007bff;">
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-item">
                                                <div class="form-group eval-inc" style="display: block;">
                                                    <i class="far fa-times-circle fa-lg" style="color: #dc3545;"></i>
                                                    <label>Incomplete</label>
                                                </div>
                                                <div class="form-group eval-com" style="display: none;">
                                                    <i class="far fa-check-circle fa-lg" style="color: seagreen;"></i>
                                                    <label>Complete</label>
                                                </div>
                                            </div>
                                        </div>
                                            <?php }}?>
                                        <div class="row-lr marg-top" id="dwnld-cert" style="display: none;">
                                            <button onclick="print_cert()" id="print" class="btn"><i class="fas fa-print"></i> Print Certificate</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
    <script type="text/javascript">
        const progress = document.getElementById("progress");
        const timer = document.getElementById("timer");
        vid = document.getElementById("video_player");
        const myInterval = setInterval(myTimer, 1000);
        var stat = document.getElementById('status');

        $(function() {
            var res = $('#resultStatus').val();
            $('#btnExam').css('color','#ffff');
            $('#vidLabel').css("color","#007bff");
            if($('#status').val() == "complete"){
                $('#btnExam').css('color','#007bff');
                $('#vidLabel').css("color","#ffff");
            }else{
                $('#btnExam').css('color','#ffff');
                $('#vidLabel').css("color","#007bff");
            }
            if (res == 'passed') {
                $('.exam-inc').hide();
                $('.exam-com').show(500);
                $('#btnExam').css('color','#ffff');
                $('#btnEvaluation').css("color","#007bff");
            }else if(res == 'failed'){
                $('.exam-com').hide();
                $('.exam-inc').show(500);
                $('#btnExam').css('color','#007bff');  
            }
            if($('#evalNum').val() > 0){
                $('.eval-com').show(500);
                $('.eval-inc').hide();
                $('#btnEvaluation').css('color','#ffff');  
                $('#dwnld-cert').show(800);

            }else{
                $('.eval-com').hide();
                $('.eval-inc').show(500);
                $('#btnEvaluation').css('color','#007bff');  
                $('#dwnld-cert').hide();
            }
            $('#video_player').prop("controls", false);
        });
        
        function progressLoop() {
            console.log(Math.round(vid.duration));
        }
        function myTimer() {
            if(stat.value == 'complete'){
                $('#hs-exam').hide();
                //$('#dwnld-cert').show(500);
                $('#hs-progress').show(500);
                $('.vid-inc').hide();
                $('.vid-com').show(500);
                $('#vidLabel').css('color',"#fff");
                // $('#btnExam').css('color','#008eff');
                $('#vid_status').val('complete');
                document.getElementById("video_player").controls = false;
                progress.value = '100';
                timer.innerHTML = '100%';

            }else{
                progress.value = Math.round((vid.currentTime / vid.duration) * 100);
                timer.innerHTML = progress.value + '%';
                if(progress.value == 100){
                    //$('#dwnld-cert').show(800);
                    clearInterval(myInterval);
                    var values = {
                        'video_id': document.getElementById('vid_id').value,
                        'user_id': document.getElementById('user_id').value,
                        'status': "complete"
                    };
                    $.ajax({
                        url: "admin/ajax.php?action=save_participants",
                        type: "POST",
                        data: values,
                        success:function(resp){
                            console.log(resp);
                            $('.vid-inc').hide();
                            $('.vid-com').show(500);
                            $('#vidLabel').css('color',"#ffff");
                            $('#btnExam').css('color','#fff');
                            $('#vid_status').val('complete');
                        }
                    });
                }
            }
            
        }

        vid.addEventListener("play", progressLoop)
        
        function take_exam(){
            
            if($('#hs-progress').hide()){
                $('#hs-progress').show(800);
                $('#hs-exam').hide(800);
                document.getElementById("video_player").controls = true;
            }
            if(stat.value == ''){
                var values = {
                    'video_id': document.getElementById('vid_id').value,
                    'user_id': document.getElementById('user_id').value,
                    'status': "incomplete"
                };
                $.ajax({
                    url: "admin/ajax.php?action=save_participants",
                    type: "POST",
                    data: values,
                    success:function(resp){
                        console.log(resp)
                    }
                });
            }
        }
        //=== Disable seeking the video
        var elem = document.querySelector("#video_player");
        let previousTime = 0;

        elem.ontimeupdate = function() {
          setTimeout(() => {
            previousTime = elem.currentTime;
          }, 1000)
        }

        elem.onseeking = function() {
          if (elem.currentTime > previousTime) {
              elem.currentTime = previousTime;
          }
        }

        $(function(){
            $('#video_player').bind('contextmenu',function(){return false;})
        });
        
        function takeExam(){
            if($('#progress').val()==100){
                var id = $('#vid_id').val();
                var userID = $('#user_id').val();
                console.log(userID);
                uni_modal("","exam.php?id="+id+"&idUser="+userID,"large");
            }else{
                alert_toast("Play the video first!",'danger')
                setTimeout(function(){
                    // location.reload()
                },3000)
            }
          
        }

        function takeEvaluation(){
            var id = $('#vid_id').val();
            var userID = $('#user_id').val();
            var title = $('#title').val();
            var _date = $('#_date').val();
            var duration = "";
            var seconds = Math.round(vid.duration);
            var min = 60;
            if(seconds > min){
                var minutes = (seconds / 60).toFixed(2);
                if(minutes > 60){
                    duration = (minutes / 60).toFixed(2);
                    duration = duration.replace('.', ':') + "hr";
                }else{
                    duration = minutes.replace('.', ':') + "min";
                }
            }else{
                duration = seconds + "s";
            }
            location.href ="index.php?page=evaluation_form2&id="+id+"&idUser="+userID+"&title="+title+"&_date="+_date+"&duration="+duration;
        }
        function print_cert() {
            var userName = encodeURIComponent($('#userName').val());
            var _date = encodeURIComponent($('#evalDate').val());

            // Fetch the content from the server
            location.href = "index.php?page=certificate_form&userName=" + userName + "&_date=" + _date;
                
        }
        // function print_cert() {
        //     var userName = encodeURIComponent($('#userName').val());
        //     var _date = encodeURIComponent($('#evalDate').val());

        //     // Fetch the content from the server
        //     fetch("certificate_form.php?userName=" + userName + "&_date=" + _date)
        //         .then(response => response.text())
        //         .then(content => {
        //             // Open a new window and print the fetched content
        //             const printWindow = window.open('', '', 'width=1000,height=800');
        //             printWindow.document.write(content);
        //             printWindow.document.close();
        //             printWindow.print();
        //             printWindow.close();
        //         })
        //         .catch(error => console.error('Error fetching content:', error));
        // }



        function fetchAndPrintContent(url) {
            fetch(url)
            .then(response => response.text())
            .then(content => printContent(content))
            .catch(error => console.error('Error fetching content:', error));
        }

        function printContent(content) {
            const printWindow = window.open('', '', 'width=1000,height=800');
            printWindow.document.write(content);
            printWindow.document.close();
            printWindow.print();
            printWindow.close();
        }
    </script>
