<?php include('db_connect.php');?>
<style>
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
.gallery-img img{
    border-radius: 5px;
    min-height: 50vh;
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
.masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
    .row-custom{
        display: flex;
        flex-wrap: wrap;
        background: #e1e1e3;
        border-radius: 10px;
        padding: 0.5rem;
        margin: 1.8em 0 0 0;
    }
    /* .row-custom b{
        position: absolute;
    } */
    .form-custom{
        display: block;
        padding: 0 5em 0 5em;
    }
	.btn-rply{
		position: relative;
		display: flex;
	}
	span b{
		font-size: 0.85em;
    	font-weight: 600;
		cursor: pointer;
	}
	span b:hover{
		color: #007bff;
	}
	.glass{
		background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
		border-radius: 20px;
		border:1px solid rgba(255, 255, 255, 0.18);
		box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
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
        margin-top:10px;
        font-weight: 300;
    }
    .sh-custom{
        display: none;
    }
</style>
    <br>
   <?php

    $query =  $conn->query("SELECT * FROM gallery ORDER BY created desc");
    while($row=$query->fetch_assoc()):
    ?>
    <div class="card Forum-list glass" data-id="<?php echo $row['id'] ?>">
        <div class="card-body">
            <div class="row  align-items-center justify-content-center text-center h-100">
                <div class="form-body" style="width: 70%;">
                    <h3><b class="filter-txt" style="letter-spacing: 1.5px;color:#fff;font-weight: 500;"><?php echo strtoupper($row['title']) ?></b></h3>
                    <div class="form-custom">
                    <?php 
                        $cmnt =  $conn->query("SELECT * FROM user_comments WHERE idVideo = ".$row['id'] . " ORDER BY datePosted DESC" );
                        $rowCount = $cmnt->num_rows;
                        if($rowCount > 0){
                            while($r=$cmnt->fetch_assoc()):
                                $q =  $conn->query("SELECT firstname,lastname FROM accounts WHERE id = ".$r['idUser']);
                                $username = $q->fetch_assoc();
                    ?>          
                            <div class="row-custom">
                                <div class="col-md-12 text-left">
                                    <b class="filter-txt"><?php echo $username['firstname'];?> , <?php echo  $username['lastname'];?></b>
                                </div>
                                <div class="col-md-12 text-left">
                                    <span><?php echo $r['comment'];?></span>
                                </div>
                            </div>
                            <?php 
                                $get =  $conn->query("SELECT * FROM admin_comments WHERE idUser = ".$r['id']);
                                $getCnt = $get->num_rows;
                                if($getCnt > 0){
                                $adminComment = $get->fetch_assoc();
                            ?>
                                <div class="col-md-12 text-left glass" style="margin-top: 10px;padding: 5px 20px;color:#a5acb5">
                                    <span><?php echo $adminComment['comment'];?></span>
                                </div>
                            <?php }else{?>
							    <span class="btn-rply" onclick="reply(this)" id="reply<?php echo $r['id'];?>" data-id="<?php echo $r['id'];?>" style="color: #7f8299;"><b>Reply</b></span>
                            <?php }?>
                            <div class="sh-custom" id="cumment<?php echo $r['id'];?>">
                                <input  class="custom-input" onkeypress="writeComment(event, this, <?php echo $row['id'] . ',' .$r['id'] ?> )"type="text" placeholder="Reply comment">
                                <span class="btn-rply" onclick="cancel(this)" data-id="<?php echo $r['id'];?>" style="color: rgba(255, 255, 255, 0.18);justify-content: end;margin-right: 5px;">
                                    <b style="font-weight: 300;">Cancel</b>
                                </span>
                            </div>
							
                            <?php  endwhile; ?>
                    <?php } ?>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    <br>
    <?php endwhile; ?>
    
</div>
    
</div>


<script>
    function writeComment(event, inputElement, idVideo, idUser) {
      // Check if the pressed key is Enter (keyCode 13)
        if (event.which === 13) {
            
            var commentText = $(inputElement).val();
            var data = { idUser: idUser, idVideo:idVideo, comment: commentText };
            
            $.ajax({
                url: 'ajax.php?action=admin_comment',
                data: JSON.stringify(data),
                cache: false,
                contentType: 'application/json',
                processData: false,
                method: 'POST',
                success: function (resp) {
                    $(inputElement).val("");
                    setTimeout(function(){
                        location.reload();
                    },1000)
                }
            });
        }
    }

    function delete_forum($id){
        start_load()
        $.ajax({
            url:'admin/ajax.php?action=delete_forum',
            method:'POST',
            data:{id:$id},
            success:function(resp){
                if(resp==1){
                    alert_toast("Data successfully deleted",'success')
                    setTimeout(function(){
                        location.reload()
                    },1500)

                }
            }
        })
    }
    function reply(element){
        var id = $(element).data('id');
        $('#cumment'+id).show();
        $(element).hide();
    }
    function cancel(element){
        var id = $(element).data('id');
        $('#cumment'+id).hide();
        $('#reply'+id).show();
    }

</script>