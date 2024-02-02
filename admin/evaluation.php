<?php include 'db_connect.php' ?>
<?php
// if(isset($_GET['id'])){
// 	$qry = $conn->query("SELECT * FROM categories where id=".$_GET['id'])->fetch_array();
// 	foreach($qry as $k =>$v){
// 		$$k = $v;
// 	}
// }
?>
<style>
    .add-class, .del-class{
        background: seagreen;
        color: #f0f0f0;
        padding: .5em;
        border-radius: 25px;
        width: 6.2em;
        display: inline-flex;
        cursor: pointer;
        justify-content: space-evenly;
        align-items: center;
    }
    .row-add{
        margin: 0.5em 0 0 0em;
        width: 100%;
    }
    .row-form{
        margin: 0.5em 0 0 0em;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .del-class{
        background: #c82333;
        cursor: pointer;
    }
    .error{
		border: 2px solid var(--red) !important;
	}
</style>
<div class="container-fluid">
	<form action="" id="evaluation">
		
        <input type="hidden" name="idVideo" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>">
        <input type="hidden" name="items" value="0" id="index">
        <div class="row form-group">
            <div class="col-md-12">
                <label class="control-label">Evaluation Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="addQuestions row-add">
                
            </div>
            <div class="col-md-12" style="margin-top: 0.65rem;">
                <span class="add-class"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</span>
                <span class="del-class" style="display: none"><i class="fa fa-trash" aria-hidden="true" ></i> DELETE</span>
            </div>
		</div>
	</form>
</div>

<script>
	// $(function(){
    //     var i = parseInt($('#index').val());
    //     if(i > 0){

    //     }
    // });

    $('.add-class').click(function(){
        var i = parseInt($('#index').val())+1;
        var strHtml = '<div class="col-md-12 q'+i+'">';
        strHtml += '<label class="control-label">Question #'+i+'</label>';
        strHtml += '<input type="text" name="quest['+i+']" class="form-control col-md-12" required>';
        strHtml += '<input type="hidden" value="'+i+'" id="qID'+i+'">';
        strHtml += '</div>';
        
        $('.addQuestions').append(strHtml);
        $('#index').val(i);
        $('.del-class').show();

    });

    $('.del-class').click(function(){
        var i = $('#index').val();
        console.log(i);
        if(i > 0){
            $('.q'+i).remove();
            i--;
            $('#index').val(i);
        }
        if(i == 0){
            $('.del-class').hide();
        }
        
    });

	$('#evaluation').submit(function(e){
        e.preventDefault()
        if(!validate("evaluation")){
            start_load()
            $.ajax({
                url:'ajax.php?action=save_evaluation',
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                success:function(resp){
                    if(resp == 1){
                        alert_toast("Data successfully saved.",'success')
                        setTimeout(function(){
                            location.reload()
                        },1000)
                    }
                }
            })
        }
	})
	
</script>