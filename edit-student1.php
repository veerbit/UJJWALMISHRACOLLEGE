<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');


if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
if (isset($_GET['id'])) {
    $un_roll = $_GET['id'];   // store in variable
   
       // $un_roll = $_POST['id'];
		
//echo $un_roll; 
$query=mysqli_query($con,"SELECT * FROM 2023_27_2024_2028 WHERE University_Reg_NO= '$un_roll' ");
$res=mysqli_fetch_array($query);
//print_r($res);


}

  }
 
   


if(isset($_POST['submit'])){
    $varlk = intval($_GET['id']);

    $cshort   = $_POST['email_id'];
    $cfull    = $_POST['address'];
    $fname    = $_POST['ad_fee_s_1'];
    $mname    = $_POST['reg_fee_sem_1'];
    $lname    = $_POST['exam_f_s_1'];
    $gname    = $_POST['sem_1_p'];
    $ocp      = $_POST['mark_s_1'];
    $gender   = $_POST['remarks_s1'];
    $income   = $_POST['ad_fee_s_2'];
    $category = $_POST['reg_fee_sem_2'];
    $physicallych = $_POST['exam_f_s_2'];
    $nation   = $_POST['sem_2_p'];
    $mobno    = $_POST['mark_s_2'];
    $email    = $_POST['remarks_s2'];
    $country  = $_POST['clc_no'];
    $state    = $_POST['clc_am'];
    $city     = $_POST['clc_remark'];

    $query = mysqli_query($con,"UPDATE 2023_27_2024_2028 SET 
        Mail_Id='$cshort', 
        Address='$cfull', 
        Admission_Fee_sem_1='$fname',
        REG_FEE_sem_1='$mname',
        Exam_Form_sem_1='$lname', 
        Sem_1_PRACITAL='$gname', 
        Marksheet_No_sem_1='$ocp',
        Remarks_of_Sem1='$gender',
        Admission_Fee_sem_2='$income', 
        REG_FEE_Sem2='$category',
        Exam_Form_sem_2='$physicallych',
        Sem_2_Pracital_FEE='$nation', 
        MARKSHEET_NO_sem2='$mobno',
        Remarks_of_Sem2='$email',
        CLC_Date='$country', 
        clc_amount='$state', 
        clc_remarks='$city'
        WHERE University_Reg_NO='$varlk'");

    if($query){
        echo '<script>alert("Update successful")</script>';
        echo "<script>window.location.href='edit-student1.php'</script>";
    } else {
        echo '<script>alert("Something went wrong. Please try again")</script>';
        echo "<script>window.location.href='edit-student1.php'</script>";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Edit students</title>
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<link href="bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">
<link href="dist/css/sb-admin-2.css" rel="stylesheet">
<link href="bower_components/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" >
	<div id="wrapper">
	<!--left !-->
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
			<div class="panel-heading">Register</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-10">
		<div class="form-group">
		<div class="col-lg-4">
		<label>Application No</label>
		</div>
		<div class="col-lg-6">
 <input class="form-control" name="regno"  id="regno"  value="<?php echo $res['Application_No'] ;?>" readonly>
       </select>
	</div>
	 </div>	<br><br>
			<div class="form-group">
		<div class="col-lg-4">
		<label>Registration Number</label>
		</div>
		<div class="col-lg-6">
 <input class="form-control" name="runroll"  id="regno"  value="<?php echo $res['University_Reg_NO'];?>" readonly>
       </select>
	</div>
	 </div>		<br><br>
	 
			<div class="form-group">
		<div class="col-lg-4">
		<label>University Roll No.</label>
		</div>
		<div class="col-lg-6">
 <input class="form-control" name="regno"  id="regno"  value="<?php echo $res['University Roll No.'];?>" readonly>
       </select>
	</div>
	 </div>	

<br><br>	

			<div class="form-group">
		    <div class="col-lg-4">
			<label>Select Course<span id="" style="font-size:11px;color:red">*</span>	</label>
			</div>
			<div class="col-lg-6">
			<?php  $query = "SELECT * FROM 2023_27_2024_2028 WHERE University_Reg_NO='$un_roll'";
					$result = mysqli_query($con, $query);

					if ($row = mysqli_fetch_assoc($result)) {
						$coreSubject = trim($row['CoreSubject']); 
						$course = ""; // to store BA / BCOM / BSC

						// Convert subjects into array (remove spaces, handle case)
						$subjects = array_map('trim', explode(",", strtolower($coreSubject)));

						// BA subjects
						$ba_subjects = ["economics","english","geography","hindi","history","home science","music","philosophy","political science","psychology","sociology","urdu"];

						// BCom subjects
						$bcom_subjects = ["accounting & finance","marketing"];

						// BSc subjects
						$bsc_subjects = ["botany","chemistry","mathematics","physics","zoology"];

						// Decide course
						if (count(array_intersect($subjects, $ba_subjects)) > 0) {
							$course = "BA (Honours)";
						} elseif (count(array_intersect($subjects, $bcom_subjects)) > 0) {
							$course = "BCOM (Honours)";
						} elseif (count(array_intersect($subjects, $bsc_subjects)) > 0) {
							$course = "BSC (Honours)";
						} else {
							$course = "Other";
						}

						/*// Print
						echo "Core Subject: " . $coreSubject . "<br>";
						echo "Course: " . $course . "<br>";*/
					} else {
						echo "No student found!";
					}
?>
			
			
			
<input class="form-control" name="regno"  id="regno"  value="<?php echo $course;?>" readonly>
										</div>
											
										</div>	
										
								<br><br>
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Core Subject<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
 <input class="form-control" name="c-full"  id="c-full"  value="<?php echo $res['CoreSubject'];?>">
       </select>
	</div>
	 </div>	
										
	 <br><br>								
			
			<div class="form-group">
		<div class="col-lg-4">
		<label>Current  Session<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		
	   <input class="form-control" name="session" value="<?php echo htmlentities($res['Session']);?>" readonly>
	 </div>	
										
	 <br><br>								
	
	</div>	
			
		<div class="form-group">
		<div class="col-lg-4">
		<label>Refrence Person<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		
	   <input class="form-control" name="session" value="<?php echo htmlentities($res['Refrence Person']);?>" readonly>
	 </div>	
										
	 <br><br>								
	
	</div>	
	<br><br>
	
									
													
				</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
			<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Personal Informations</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label>Student Name<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fname" value="<?php echo htmlentities($res['Student Name']);?>"required="required">
			</div>
			 <div class="col-lg-2">
			<label>Fateher Name</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mname" value="<?php echo htmlentities($res['Father Name']);?>">
			</div>
			</div>	
			<br><br>
				<div class="form-group">
		    <div class="col-lg-2">
			<label>Mother Name</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="fname" value="<?php echo htmlentities($res['Mother Name']);?>">
			</div>
			 <div class="col-lg-2">
			<label>Mobile Number</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="mname" value="<?php echo htmlentities($res['Mobile Number']);?>">
			</div>
			</div>	
			<br><br>				
			<div class="form-group">
			 <div class="col-lg-2">
			<label>Mail Id<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="email_id" value="<?php echo htmlentities($res['Mail_Id']);?>">
			</div>
			 <div class="col-lg-2">
			<label>Permanent Address<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<textarea class="form-control" rows="3" name="address"><?php echo htmlentities($res['Address']);?></textarea>
			</div>
			</div>	
			<br><br><br><br>	
		    
			</div>	
			<br><br>
		</div>
      	</div>
		</div>
			
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">Semester 1 Detail</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label> Admission Fee Sem 1<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="ad_fee_s_1" value="<?php echo htmlentities($res['Address']);?>">
			</div>
			 <div class="col-lg-2">
			<label>REG. FEE of Sem 1<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  name ="reg_fee_sem_1" required="required" 
			value="<?php echo htmlentities($res['REG_FEE_sem_1']);?>">
			</div>
			</div>	
			<br><br>
				<div class="form-group">
		    <div class="col-lg-2">
			<label> Exam Form Sem 1<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  name="exam_f_s_1" required="required" 
			value="<?php echo htmlentities($res['REG_FEE_sem_1']);?>">
			</div>
			 <div class="col-lg-2">
			<label>Sem 1 PRACITAL<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"   name="sem_1_p" required="required" 
			value="<?php echo htmlentities($res['Sem_1_PRACITAL']);?>">
			</div>
			</div>	
			<br><br>

<div class="form-group">
		    <div class="col-lg-2">
			<label> Marksheet No. Sem 1<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  name="mark_s_1" required="required" 
			value="<?php echo htmlentities($res['REG_FEE_sem_1']);?>">
			</div>
			
			
			 <div class="col-lg-2">
			<label>Remarks of Sem1<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
      <textarea class="form-control" rows="3" name="remarks_s1"><?php //echo htmlentities($res['cadd']);?></textarea>
			</div>
			
			
			
			</div>	
			<br><br>			
		     
		</div>	
			<br><br>
		</div>
      	</div>
		</div>	
		
		
		
		
		
		
		<div class="panel panel-default">
			<div class="panel-heading">Semester 2 Detail</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label> Admission Fee Sem 2<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="ad_fee_s_2" value="<?php echo htmlentities($res['Address']);?>">
			</div>
			 <div class="col-lg-2">
			<label>REG. FEE of Sem 2<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"   name="reg_fee_sem_2" required="required" 
			value="<?php echo htmlentities($res['REG_FEE_Sem2']);?>">
			</div>
			</div>	
			<br><br>
				<div class="form-group">
		    <div class="col-lg-2">
			<label> Exam Form Sem 2<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"   name="exam_f_s_2" required="required" 
			value="<?php echo htmlentities($res['Exam_Form_sem_2']);?>">
			</div>
			 <div class="col-lg-2">
			<label>Sem 2 PRACITAL<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"   name="sem_2_p" required="required" 
			value="<?php echo htmlentities($res['Sem_2_Pracital_FEE']);?>">
			</div>
			</div>	
			<br><br>

<div class="form-group">
		    <div class="col-lg-2">
			<label> Marksheet No. Sem 2<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"   name="mark_s_2" required="required" 
			value="<?php echo htmlentities($res['REG_FEE_Sem2']);?>">
			</div>
			
			
			 <div class="col-lg-2">
			<label>Remarks of Sem2<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
      <textarea class="form-control" rows="3" name="remarks_s2"><?php //echo htmlentities($res['cadd']);?></textarea>
			</div>
			
			
			
			</div>	
			<br><br>			
		     
		</div>	
			<br><br>
		</div>
      	</div>
		</div>	
		
		
	
	
	<div class="panel panel-default">
			<div class="panel-heading">CLC</div>
			<div class="panel-body">
			<div class="row">
			<div class="col-lg-12">
			<div class="form-group">
		    <div class="col-lg-2">
			<label> CLC  No<span id="" style="font-size:11px;color:red">*</span>	</label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control" name="clc_no" value="<?php echo htmlentities($res['CLC_Date']);?>">
			</div>
			 <div class="col-lg-2">
			<label>CLC Amount<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
			<input class="form-control"  name="clc_am" required="required" 
			value="<?php echo htmlentities($res['clc_amount']);?>">
			</div>
			</div>	
			<br><br>
				
			
			
			 <div class="col-lg-2">
			<label>CLC Remarks<span id="" style="font-size:11px;color:red">*</span></label>
			
			</div>
			<div class="col-lg-4">
      <textarea class="form-control" rows="3" name="clc_remark"><?php echo htmlentities($res['clc_remarks']);?></textarea>
			</div>
			
			
			
			</div>	
			<br><br>			
		     
		</div>	
			<br><br>
		</div>
      	</div>
		</div>	



		
        <div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
			
			<div class="panel-body">
			<div class="row">
			
			
					
			
		
	<div class="form-group">
	<div class="col-lg-4">
	</div>
	<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Update"></button>
	<input type="submit" class="btn btn-primary" name="back" value="Go Back"></button>
       
	


	
	
	</div>
	</div>			
	</div>
	</div><!--row!-->	

					
				</div>
				
			</div>
			
		</div>
		

	</div>
	

	<!-- jQuery -->
	<script src="bower_components/jquery/dist/jquery.min.js"
		type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"
		type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="bower_components/metisMenu/dist/metisMenu.min.js"
		type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="dist/js/sb-admin-2.js" type="text/javascript"></script>
	
	<script>
function showState(val) {
    
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'id='+val,
	success: function(data){
	  // alert(data);
		$("#state").html(data);
	}
	});
}

function showDist(val) {
    
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'did='+val,
	success: function(data){
	  // alert(data);
		$("#dist").html(data);
	}
	});
	
}



function showSub(val) {
    
    //alert(val);
  	$.ajax({
	type: "POST",
	url: "subject.php",
	data:'cid='+val,
	success: function(data){
	  // alert(data);
		$("#c-full").val(data);
	}
	});
	
}
</script>
</form>
</body>
</html>

  <?php if(isset($_POST['back'])){
    header("Location: manage-students.php"); // replace with your page
    exit();
} 
?>