<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $un_roll = "'".$_POST['un_roll']."'";
		
//echo $un_roll;
        // Prepare the SQL statement
        $stmt = $con->prepare("SELECT * FROM 2023_27_2024_2028 WHERE University_Reg_NO = ?");
        //$result = $con->query("SELECT * FROM 2023_27_2024_2028");
		
		//$student = $result->fetch_assoc();
		//print_r($student);
		
		
		
		
		
		//$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
$stmt->bind_param("i", $un_roll);
$stmt->execute();
$result = $stmt->get_result();

$student = $result->fetch_assoc();
//print_r($student);
}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<!-- Bootstrap Core CSS -->
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<!-- MetisMenuCSS -->
<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="dist/css/sb-admin-2.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<form method="post" >
	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">CLC</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">
															
		<div class="form-group">
		<div class="col-lg-4">
		<label>Enter the Universtiy Roll N0:-<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
				<div class="col-lg-6">
		<input class="form-control" name="un_roll" id="cfull" value="" required="required"  onblur="coursefullAvail()">         
	<span id="course-status" style="font-size:12px;"></span>				</div>
	 </div>	
										
									
										
	
	</div>	

		
							<div class="form-group">
											<div class="col-lg-4">
												
											</div>
											<div class="col-lg-6"><br><br>
							<input type="submit" class="btn btn-primary" name="submit" value="Search Student"></button>
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
	
	<script src="bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="dist/js/sb-admin-2.js" type="text/javascript"></script>
	
	<script>
function courseAvailability() {
	
jQuery.ajax({
url: "course_availability.php",
data:'cshort='+$("#cshort").val(),
type: "POST",
success:function(data){
$("#course-availability-status").html(data);


},
error:function (){}
});
}

function coursefullAvail() {
	
jQuery.ajax({
url: "course_availability.php",
data:'cfull='+$("#cfull").val(),
type: "POST",
success:function(data){
$("#course-status").html(data);


},
error:function (){}
});
}



</script>
</form>
</body>

</html>
