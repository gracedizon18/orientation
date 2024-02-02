<?php include 'db_connect.php' ?>

<form action="" id="dateTime">
	<div class="container-fluid row" style="justify-content: flex-start;padding-right: 0;">
        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
		<div class="row col-md-6 form-group" style="flex-direction: column;margin-left: 1em;padding-left: 0;">
			<span style="text-align: center;color: #007bff">DATE</span>
			<span>From:</span>
			<input type="date" name="startDate" id="startDate" style="width: 100%;margin-bottom: 1em">
			<span>To:</span>
			<input type="date" name="endDate" id="endDate" style="width: 100%">
		</div>
		<div class="row col-md-6 form-group" style="flex-direction: column;margin-left: 1em ">
			<span style="text-align: center;color: #007bff">TIME</span>
			<input type="time" name="startTime" id="startDate" style="width: 100%;margin-top: 1.5em">
			<input type="time" name="endTime" id="endDate" style="width: 100%; margin-top: 2.5em">
		</div>
	</div>
</form>
