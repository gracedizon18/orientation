<?php 
include 'admin/db_connect.php'; 
?>
<style>
    .modal-content{
        background: url('assets/img/bck1.jpg');
        background-size: cover;
        border: none;
        border-radius: 10px;
    }
    .modal-header{
        background: #007bff;
        display: none;
    }
    .modal-footer{
        border: none;
    }
    .card{
        border: 0;
    }
    .question-label{
        display: flex;
        align-items: center;
        padding: 0 0 0.5em 1rem;
        color: #444;
        font-size: 3vh;
        font-weight: 600;
    }
    .question-label label{
        margin: 0 0.5em 0 0;
    }
    .form-box{
        background: #f0f0f0;
        border-radius: 10px;
        margin: 1rem 1rem;
        padding: 1rem;
        
    }
    .modal-body{
        height: 470px;
    	overflow-y: auto;
	}
    .text-center h4{
        letter-spacing: 1.5px !important;
        color: #08c;
        font-weight: 600;
    }
    ::-webkit-scrollbar{
        width: 10px;
    }
    ::-webkit-scrollbar-track{
        background: transparent;
    }
    ::-webkit-scrollbar-thumb{
        background: linear-gradient(#222429,#262a33);
        /* background: transparent; */
    }

</style>
<div class="container-fluid">
	<form action="" id="select_answer" enctype="multipart/form-data">
		<div class="card top-radius" style="background: transparent;">
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>">
			<input type="hidden" name="idUser" value="<?php echo isset($_GET['idUser']) ? $_GET['idUser']:'' ?>">
            <?php
                $idVideo = isset($_GET['id']) ? $_GET['id']:'';
                $items = 0;
                $idExam = 0;
                $i = 0;

                $exam = $conn->query("SELECT * from exams where idVideo = $idVideo");
                if($exam) {
                    $data = $exam->fetch_assoc();
                    $items = $data['items'];
                    $idExam = $data['id'];
                }
                $questions = $conn->query("SELECT * from questions where idExam = $idExam");               
            ?>
			<div class="card-body ">
                <input type="hidden" name="idExam" value="<?php echo $idExam;?>">
                <div class="row">
                        <div class="col-md-12 text-center">
                            <h4><?php echo strtoupper($data['examName']);?></h4>
                        </div>
                </div>
            <?php  while($row=$questions->fetch_assoc()): ?>
                <div class="container-fluid form-box">
                    <div class="row">
                        <div class="col-md-12 question-label">
                            <label><?php echo $i+1;?>.)</label>
                            <label><?php echo $row['question'];?></label>
                        </div>
                            <div class="col-md-6" style="font-weight: 500;color:#444">
                                <label for=""><input type="radio" id="ans<?php echo $i;?>" name="answer[<?php echo $i;?>]" value="A"> A.) <?php echo $row['_a'];?></label>
                            </div>
                            <div class="col-md-6" style="font-weight: 500;color:#444">
                                <label for=""><input type="radio" id="ans<?php echo $i;?>" name="answer[<?php echo $i;?>]" value="B"> B.) <?php echo $row['_b'];?></label>
                            </div>
                            <div class="col-md-6" style="font-weight: 500;color:#444">
                                <label for=""><input type="radio" id="ans<?php echo $i;?>" name="answer[<?php echo $i;?>]" value="C"> C.) <?php echo $row['_c'];?></label>
                            </div>
                            <div class="col-md-6" style="font-weight: 500;color:#444">
                                <label for=""><input type="radio" id="ans<?php echo $i;?>" name="answer[<?php echo $i;?>]" value="D"> D.) <?php echo $row['_d'];?></label>
                            </div>
                        </div>
                    <input type="hidden" name="ans[<?php echo $i?>]" id="ans<?php echo $i?>" value="<?php echo $row['answer'];?>">
                </div>
                <?php $i++;?>
			    <?php endwhile; ?>
			</div>
            <input type="hidden" name="items" value="<?php echo $i;?>">

		</div>
	</form>
</div>
<script>
    $('#select_answer').submit(function(e){
		e.preventDefault()
        $.ajax({
			url:'admin/ajax.php?action=submit_answer',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully submitted",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}else{
                    alert_toast("Data failed to submit",'danger')
					setTimeout(function(){
						location.reload()
					},1500)
                }
			}
		})

    });
</script>