<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.student-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.student-img {
    width: calc(30%);
    max-height: 30vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.student-list .card-body{
    width: calc(70%);
}
.student-img img {
    border-radius: 100%;
    max-height: calc(100%);
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
.alumni-text{
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
.student-list p {
	margin:unset;
}
</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <h3 class="text-white">Students List</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
        	<div class="container">
        		<div class="card mb-4 mt-4">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-8">
		                    <div class="input-group mb-3">
		                      <div class="input-group-prepend">
		                        <span class="input-group-text" id="filter-field"><i class="fa fa-search"></i></span>
		                      </div>
		                      <input type="text" class="form-control" id="filter" placeholder="Filter name,course, etc." aria-label="Filter" aria-describedby="filter-field">
		                    </div>
		                </div>
		                <div class="col-md-4">
		                    <button class="btn btn-primary btn-block btn-sm" id="search">Search</button>
		                </div>
		            </div>
		            
		        </div>
		    </div>
        	</div>	
            <div class="container-fluid mt-3 pt-2">
               
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
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
                $fpath = 'admin/assets/uploads';
                $student = $conn->query("SELECT * From accounts ORDER BY lastname ASC");
                while($row = $student->fetch_assoc()):
                ?>
                <div class="col-md-4 item">
                <div class="card student-list" data-id="<?php echo $row['id'] ?>">
                        <div class="student-img" card-img-top>
                            <img src="<?php echo isset($img[$row['id']]) && is_file($fpath.'/'.$img[$row['id']]) ? $fpath.'/'.$img[$row['id']] :'' ?>" class="gimg" alt="">
                        </div>
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            <div class="">
                                <div>
                                <p class="filter-txt"><b><?php echo ucfirst($row['firstname']) . ' ' . ucfirst($row['lastname']) ?></b></p>
                                <hr class="divider w-100" style="max-width: calc(100%)">
                                <p class="filter-txt">Gender: <b><?php echo $row['gender'] ?></b></p>
                                <p class="filter-txt">Email: <b><?php echo $row['email'] ?></b></p>
                                
                                    <br>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </div>


<script>
    // $('.card.alumni-list').click(function(){
    //     location.href = "index.php?page=view_alumni&id="+$(this).attr('data-id')
    // })
    $('.book-alumni').click(function(){
        uni_modal("Submit Booking Request","booking.php?alumni_id="+$(this).attr('data-id'))
    })
    $('.alumni-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })
     $('#filter').keypress(function(e){
    if(e.which == 13)
        $('#search').trigger('click')
   })
    $('#search').click(function(){
        var txt = $('#filter').val()
        start_load()
        if(txt == ''){
        $('.item').show()
        end_load()
        return false;
        }
        $('.item').each(function(){
            var content = "";
            $(this).find(".filter-txt").each(function(){
                content += ' '+$(this).text()
            })
            if((content.toLowerCase()).includes(txt.toLowerCase()) == true){
                $(this).toggle(true)
            }else{
                $(this).toggle(false)
            }
        })
        end_load()
    })

</script>