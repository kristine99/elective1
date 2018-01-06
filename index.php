<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<section class="container-fluid">
		<section class="col-md-12">
			<div id ="form" >
			<form action="server.php" class="form-appoint" method="post">
			<table id="input-table">
				<thead><tr><td><h1 class="text-center">KDM CLINIC</h1></td></tr></thead>
				<tbody>
					<tr><td>
						<input type="hidden" id="clientid" name="id">
						<input class="form-control" type="" name="user" id="name" placeholder="User" required>
					</td></tr>
					<tr><td><select class="form-control" name="physician" required>
						<option id="notedit" value="">Physician</option>
						<option value="Dale R. Aragon">Dale R. Aragon</option>
						<option value="Anver Z. Marapao">Anver Z. Marapao</option>
						<option value="Michael D. Guilaran">Michael D. Guilaran</option>
						<option value="Pilar D. Arpilleda">Pilar D. Arpilleda</option>
						<option value="Shiloah R. Suarez">Shiloah R. Suarez</option>
					</select></td></tr>
					<tr><td><select class="form-control" name="time" required>
						<option id="notedit" value="">Time</option>
						<option value="8:00-9:00 AM">8:00-9:00 AM</option>
						<option value="9:00-10:00 AM">9:00-10:00 AM</option>
						<option value="10:00-11:00 AM">10:00-11:00 AM</option>
						<option value="11:00-11:30 AM">11:00-11:30 AM</option>
						<option value="1:00-2:00 PM">1:00-2:00 PM</option>
						<option value="2:00-3:00 PM">2:00-3:00 PM</option>
					</select></td></tr>
					<tr><td><select class="form-control" name="date" required>
						<option id="notedit" value="">Date</option>
						<option value="2018/01/21">2018/01/21</option>
						<option value="2018/01/23">2018/01/23</option>
						<option value="2018/01/26">2018/01/26</option>
						<option value="2018/01/28">2018/01/28</option>
						<option value="2018/02/05">2018/02/05</option>
						<option value="2018/02/15">2018/02/15</option>
					</select></td></tr>
				<tfoot><tr><td>
					<button class="btn btn-lg btn-secondary btn-block btnedit" id="btnedit" type=submit name="submit">Set Appointment</button>
					<button class="btn btn-lg btn-secondary btn-block btned" id="btned" type=submit name="doneEdit">Edit</button>
				</td></tr></tfoot>
				</tbody>
			</table>
			</form>
		</div>
		</section>
		<section class="table-data mt-2" >
            <div class="row">        
                <table class="table table-hover" id="t-record">
                    <thead>
                        <th>Id</th>
                        <th>Client</th>
                        <th>Physician</th>
                        <th>Time</th>
                        <th>Schedule</th>
                    </thead>
                    <tbody>	
				<?php	
					$results = mysqli_query($db,"SELECT * FROM client"); ?>
					<?php while ($row = mysqli_fetch_array($results)) { ?>
						<form method="post" action="server.php">
						<tr>
							<td>
								<div >
									<input type="hidden" name="id" id="id" value="<?php echo $row['userID']; ?>">
									<?php echo $row['userID']; ?>
								</div>
							</td>
							<td>
								<div >
									<input type="hidden" name="id" id="user" value="<?php echo $row['userName']; ?>">
									<?php echo $row['userName']; ?>
								</div>
							</td>
							<td>
								<div id="physician">
									<?php echo $row['physName']; ?>
								</div>
							</td>
							<td>
								<div id="time">
									<?php echo $row['time']; ?>
								</div>
							</td>
							<td>
								<div id="date">
									<?php echo $row['sched']; ?>
								</div>
							</td>
							<td>	
								<a class="btn btn-xs btn-success btn-block btnedit" id="Cedit" name="edit" >Edit</a>
							</td>
							<td>
								<button  class="btn btn-xs btn-danger btn-block btndel" id="Cedit" type="submit" name="delete">Delete</button>
							</td>
						</tr>
						</form>		
					<?php } ?>	
		</section>
	</section>
	<script type="text/javascript" 	src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>		
</body>
</html>