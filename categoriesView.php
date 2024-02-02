<?php 
include 'admin/db_connect.php'; 
?>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

<style>
*{
    font-family: 'Poppins', sans-serif !important;
}
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.gallery-list{
    cursor: pointer;
    border: unset;
    flex-direction: inherit;
}
.gallery-img,.gallery-list .card-body {
    width: calc(50%)
}
.gallery-img{
    padding: 1rem;
}
.gallery-img img{
    border-radius: 5px;
    min-height: 30vh;
    max-width: calc(100%);
}
.gallery-video,.gallery-list .card-body {
    width: calc(50%)
}
.gallery-video video{
    border-radius: 5px;
    min-height: 30vh;
    max-width: calc(100%);
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh !important;
        height: 50vh !important
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.gallery-text{
    justify-content: center;
    align-items: center ;
}
.masthead{
    min-height: 23vh !important;
    height: 23vh !important;
}
    .masthead:before{
    min-height: 23vh !important;
    height: 23vh !important;
}
.row-lr{
    display: flex;
    flex-direction: column;
}
.control-label{
    /* font-family: 'Century Gothic', sans-serif !important; */
    font-weight: 500;
    font-size: 1em !important;
    font-style: normal;
    color: #c8d2e3;
}
.label-content{
    font-family: 'Kanit', sans-serif;
    color:#ffffff;
    font-weight: 600;
    font-size: 2.5vh;
    letter-spacing: 2px;
}
.glass{
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
}

.custom-width{
    text-align: left;
    color: whitesmoke;
    margin: 10px 25px;
}

.custom-input{
    width: 100%;
    outline: none;
    border-radius: 15px;
    border: none;
    padding: 5px 15px;
    color: whitesmoke;
    border: 1px solid rgba(255, 255, 255, 0.18);
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
}
.custom-btn{
    padding: 5px 20px;
    border-radius: 20px;
    cursor: pointer;
}
.btn-exam a:hover{
    color: black;
    text-decoration: none;
}
body {
    font-family: Arial, sans-serif !important;
}

.comment-container {
    display: flex;
    padding: 10px;
    /* border: 1px solid #475357; */
    border-radius: 8px;
    margin: 0 1.7em;
}

.profile-picture {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.comment-content {
    text-align: left;
    display: flex;
    flex-direction: column;
}

.comment-author {
    font-weight: bold;
    color: #385898;
}

.comment-text {
    margin-top: 5px;
    line-height: 1.4;
}
.modal-dialog{
    max-width: 750px !important;
}
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <?php 
                            $courseId = intval($_SESSION['bio']['course']);

                            // Prepare and execute the statement
                            $stmt = $conn->prepare("SELECT course FROM courses WHERE id = ?");
                            $stmt->bind_param("i", $courseId);
                            $stmt->execute();
                            $stmt->bind_result($course);
                            $stmt->fetch();
                            $stmt->close();
                        ?>
                    	<h3 class="text-white"><?php echo $course;?></h3>
                        <hr class="divider my-4 "style="max-width: calc(50%)" />
                        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['login_user'];?>">
                        
                        <input type="hidden" name="idUser" id="idUser" value="<?php echo $_SESSION['bio']['id'];?>">
                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                </div>
            </div>
        </header>
        
        <?php
        $vid_path = 'admin/assets/uploads/videos/';
        $query =  $conn->query("SELECT * FROM gallery WHERE course = '" . $_SESSION['bio']['course'] ."'");
        while($row=$query->fetch_assoc()):
        ?>
        <?php  ?>
        <div class="card Forum-list " style="background: transparent;" data-id="<?php echo $row['id'] ?>">
            <div class="card-body">
                <div class="row  align-items-center justify-content-center text-center h-100">
                    <div class="form-body glass" style="width: 690px;">
                        <h3 style="margin-top: 10px;"><b class="filter-txt" style="letter-spacing: 1.5px;color:#fff;font-weight: 500;"><?php echo strtoupper($row['title']) ?></b></h3>
                        <div class="custom-width" style="text-align: left;color: whitesmoke;margin: 10px 25px;">
                            <span>Description: <?php echo $row['shortDescription']?></span>
                        </div>
                        <div class="form-custom">
                            <div class="form-group">
                                <div class="video-categories">
                                    <video class="fill" preload="metadata" style="border-radius: 10px;width:640px">
                                        <source src="<?php echo $vid_path.$row['title'].'.mp4 #t=4.5'; ?>" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            
                            <?php
                                
                                $currentTime = new DateTime('now', new DateTimeZone('Asia/Manila'));

                                date_default_timezone_set('Asia/Manila');
                                $currentDate = date('Y-m-d');
                                $currentTime = date('H:i:s');

                                $startDate = date('Y-m-d' , strtotime($row['startDate']));
                                $endDate = date('Y-m-d' , strtotime($row['endDate']));

                                $startTime =date('H:i:s' , strtotime($row['startTime']));
                                $endTime = date('H:i:s' , strtotime($row['endTime']));

                                $exCnt =  $conn->query("SELECT * FROM exams WHERE idVideo = ".$row['id']);
                                $cnt = $exCnt->num_rows;
                                

                                if($cnt != 0){
                                    
                                    if ($currentDate >= $startDate && $currentDate <= $endDate && $currentTime >= $startTime &&  $currentTime <= $endTime) {
                            ?>
                                <div class="custom-width btn-exam" style="text-align: right;">
                                    <span class="custom-btn" onclick="takeExam(<?php echo $row['id'] . ',' . $_SESSION['bio']['id'] ?>)" style="color:black;background: seagreen;">
                                        Take Exam
                                    </span>
                                </div>
                            <?php
                                        
                                    }
                                }
                            ?>
                            <?php 
                                $_cnt = 0;
                                $cmnt =  $conn->query("SELECT * FROM user_comments WHERE idVideo = ".$row['id'] . " order by datePosted desc");
                                $rowCount = $cmnt->num_rows;
                                if($rowCount > 0){
                                    if($rowCount > 1){
                             ?>
                                        <div class="custom-width">
                                            <button class="custom-input" style="width:auto" data-toggle="modal" data-target="#viewMoreComments<?php echo $row['id']?>">View more comments</button>
                                        </div>
                                        <?php 
                                        $com = $conn->query("SELECT * FROM user_comments WHERE idVideo = " . $row['id'] . " ORDER BY datePosted DESC LIMIT 1");
                                        $r=$com->fetch_assoc();
                                        $getUser = $conn->query("SELECT firstname,lastname,middlename FROM accounts WHERE id = ". $r['idUser']);
                                        $user = $getUser->fetch_assoc();
                                        ?>

                                        <div class="comment-container">
                                            <img class="profile-picture" src="admin/assets/uploads/<?php echo $r['idUser'];?>_img.jpg" alt="Profile Picture">
                                            <div class="glass" style="width:auto;padding: 8px;border-radius: 15px">
                                                <div class="comment-content">
										            <?php $middlename = !empty($user['middlename']) ? strtoupper($user['middlename'][0]) . '.' : ',';?>
                                                    <span class="comment-author"><?php echo ucfirst($user['firstname']) .' '. $middlename;?> <?php echo  ucfirst($user['lastname']);?></span>
                                                    <span class="comment-text" style="color: #57616b;"><?php echo $r['comment'];?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <?php 
                                            $get =  $conn->query("SELECT * FROM admin_comments WHERE idUser = ".$r['id']);
                                            $getCnt = $get->num_rows;
                                            if($getCnt > 0){
                                            $adminComment = $get->fetch_assoc();
                                        ?>
                                            <div class="comment-container" style="padding-left: 3.5em">
                                                <img class="profile-picture" src="admin/assets/uploads/admin.png" alt="Profile Picture">
                                                <div class="glass" style="width:auto;padding: 8px;border-radius: 15px">
                                                    <div class="comment-content">
                                                        <span class="comment-author">Admin</span>
                                                        <span class="comment-text" style="color: #57616b;"><?php echo $adminComment['comment'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                            <?php 
                                    }else{
                                    while($r=$cmnt->fetch_assoc()):
                                    $getUser = $conn->query("SELECT firstname,lastname,middlename FROM accounts WHERE id = ". $r['idUser']);
                                    $user = $getUser->fetch_assoc();
                            ?>          
                                        <div class="comment-container">
                                            <img class="profile-picture" src="admin/assets/uploads/<?php echo $r['idUser'];?>_img.jpg" alt="Profile Picture">
                                            <div class="glass" style="width:auto;padding: 8px;border-radius: 15px">
                                                <div class="comment-content">
										            <?php $middlename = !empty($user['middlename']) ? strtoupper($user['middlename'][0]) . '.' : ',';?>
                                                    <span class="comment-author"><?php echo ucfirst($user['firstname']) .' '. $middlename;?> <?php echo  ucfirst($user['lastname']);?></span>
                                                    <span class="comment-text" style="color: #57616b;"><?php echo $r['comment'];?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            $get =  $conn->query("SELECT * FROM admin_comments WHERE idUser = ".$r['id']);
                                            $getCnt = $get->num_rows;
                                            if($getCnt > 0){
                                            $adminComment = $get->fetch_assoc();
                                        ?>
                                            <div class="comment-container" style="padding-left: 3.5em">
                                                <img class="profile-picture" src="admin/assets/uploads/admin.png" alt="Profile Picture">
                                                <div class="glass" style="width:auto;padding: 8px;border-radius: 15px">
                                                    <div class="comment-content">
                                                        <span class="comment-author">Admin</span>
                                                        <span class="comment-text" style="color: #57616b;"><?php echo $adminComment['comment'];?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }
                                            $_cnt++;
                                        ?>
                                    <?php  endwhile; }?>
                                    
                            <?php } ?>
                        </div>
                        
                        
                        <div class="custom-width">
                            <input class="custom-input" onkeypress="writeComment(event, this, <?php echo $row['id'] . ',' .$_SESSION['bio']['id'] ?> )" style="margin-top:5px;font-weight: 300;"  type="text" placeholder="Write a Comment">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="viewMoreComments<?php echo $row['id']?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="form-body" style="width: 690px;">
                                <h3 style="margin-top: 10px;"><b class="filter-txt" style="letter-spacing: 1.5px;color:#333;font-weight: 500;"><?php echo strtoupper($row['title']) ?></b></h3>
                                <div class="custom-width" style="text-align: left;color: #333;margin: 10px 25px;">
                                    <span>Description: <?php echo $row['shortDescription']?></span>
                                </div>
                                <div class="form-custom">
                                    <div class="form-group">
                                        <div class="video-categories">
                                            <video class="fill" preload="metadata" style="border-radius: 10px;width:640px">
                                                <source src="<?php echo $vid_path.$row['title'].'.mp4 #t=4.5'; ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <?php 
                                        $_cnt = 0;
                                        $cmnt =  $conn->query("SELECT * FROM user_comments WHERE idVideo = ".$row['id'] . " order by datePosted desc");
                                        $rowCount = $cmnt->num_rows;
                                        if($rowCount > 0){
                                    ?>
                                               
                                    <?php 
                                            while($r=$cmnt->fetch_assoc()):
                                            $getUser = $conn->query("SELECT firstname,lastname,middlename FROM accounts WHERE id = ". $r['idUser']);
                                            $user = $getUser->fetch_assoc();
                                    ?>          
                                                <div class="comment-container">
                                                    <img class="profile-picture" src="admin/assets/uploads/<?php echo $r['idUser'];?>_img.jpg" alt="Profile Picture">
                                                    <div class="glass" style="width:auto;padding: 8px;border-radius: 15px">
                                                        <div class="comment-content">
                                                            <?php $middlename = !empty($user['middlename']) ? strtoupper($user['middlename'][0]) . '.' : ',';?>
                                                            <span class="comment-author"><?php echo ucfirst($user['firstname']) .' '. $middlename;?> <?php echo  ucfirst($user['lastname']);?></span>
                                                            <span class="comment-text" style="color: #57616b;"><?php echo $r['comment'];?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                    $get =  $conn->query("SELECT * FROM admin_comments WHERE idUser = ".$r['id']);
                                                    $getCnt = $get->num_rows;
                                                    if($getCnt > 0){
                                                    $adminComment = $get->fetch_assoc();
                                                ?>
                                                    <div class="comment-container" style="padding-left: 3.5em">
                                                        <img class="profile-picture" src="admin/assets/uploads/admin.png" alt="Profile Picture">
                                                        <div class="glass" style="width:auto;padding: 8px;border-radius: 15px">
                                                            <div class="comment-content">
                                                                <span class="comment-author">Admin</span>
                                                                <span class="comment-text" style="color: #57616b;"><?php echo $adminComment['comment'];?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }
                                                    $_cnt++;
                                                ?>
                                            <?php  endwhile;?>
                                            
                                    <?php } ?>
                                </div>
                                
                                
                                <div class="custom-width">
                                    <input class="custom-input" onkeypress="writeComment(event, this, <?php echo $row['id'] . ',' .$_SESSION['bio']['id'] ?> )" style="margin-top:5px;font-weight: 300;"  type="text" placeholder="Write a Comment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        </div>
        
<script>
   
    function writeComment(event, inputElement, idVideo, idUser) {
      // Check if the pressed key is Enter (keyCode 13)
        if (event.which === 13) {
            
            var commentText = $(inputElement).val();
            var data = { idUser: idUser, idVideo:idVideo, comment: commentText };
            
            $.ajax({
                url: 'admin/ajax.php?action=user_comment',
                data: JSON.stringify(data),
                cache: false,
                contentType: 'application/json',
                processData: false,
                method: 'POST',
                success: function (resp) {
                    $(inputElement).val("");
                    alert_toast("commented",'success');
                    setTimeout(function(){
                        location.reload();
                    },1000)
                }
            });
        }
    }

    function view_list(id){
        user = $('#user').val();
        var idUser = $('#idUser').val();
        console.log(user);
        if(user == 'student'){
            uni_modal("","categories.php?id="+id+"&&idUser="+idUser,"large")
        }else{
            alert_toast('Please Login/Signup first','danger')
            setTimeout(function(){
            },1800)
        }
    }
    function takeExam(id,idUser){
        console.log('test');    
		location.href ="index.php?page=view_video&id="+id+"&idUser="+idUser;
	}
    
</script>