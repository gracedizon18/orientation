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
        min-height: 95vh !important;
        height: 95vh !important
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
body{
    overflow: auto;
}
/*----------*/
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: transparent;
  width: 710px;
}

.carousel-cell {
  width: 100%;
  height: 400px;
  margin-right: 15px;
  background: transparent;
  border-radius: 5px;
  counter-increment: gallery-cell;
}
/* cell number */
/* .carousel-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
} */
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center" style="margin-top: 2em;">
                    <div class="col-lg-8 align-self-end mb-4 page-title" style="display: flex; flex-direction: column;align-items: center;">
                    	<h3 class="text-white">Welcome to <?php echo $_SESSION['system']['name'];?></h3>
                        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['login_user'];?>">
                        <input type="hidden" name="idUser" id="idUser" value="<?php echo isset($_SESSION['bio']['id']) ? $_SESSION['bio']['id']:'';?>">
                    </div>
                    <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="carousel">
                                <?php 
                                    $vid_path = 'admin/assets/uploads/videos/';
                                    $gallery = $conn->query("SELECT * FROM gallery order by created desc");
                                    while($row=$gallery->fetch_assoc()):
                                ?>
                                <div class="carousel-cell">
                                    <?php
                                        $vid = $vid_path.$row['title'] . ".mp4";
                                        if($row['title'] != null){
                                    ?>
                                    <video preload="metadata" style="height: 400px;">
                                        <source src="<?php echo $vid.'#t=0.9'; ?>">
                                    </video>
                                    <?php } ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>       
                </div>
                <!-- <div class="card" style="background: transparent;">
                    <div class="card-body">
                        
                    </div>
                </div> -->
            </div>
            
        </header>

<script src="js/flickity.pkgd.min.js"></script>

<script>
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
    $('.carousel').flickity({
        // options
        autoPlay: true
    });
    
</script>