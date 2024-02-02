
<style>
	.collapse a{
		text-indent:10px;
	}
	nav#sidebar{
		background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important
	}
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">
				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Dashboard</a>
				<a href="index.php?page=gallery" class="nav-item nav-gallery"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Categories </a>
				<a href="index.php?page=courses" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-list"></i></span> Course List</a>
				<a href="index.php?page=students" class="nav-item nav-students"><span class='icon-field'><i class="fa fa-users"></i></span> Student List</a>
				<!-- <a href="index.php?page=request" class="nav-item nav-request"><span class='icon-field'><i class="fa fa-question-circle"></i></span> Request</a> -->
				<a href="index.php?page=comments" class="nav-item nav-forums"><span class='icon-field'><i class="fa fa-comments"></i></span> Comment List</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
		</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
