<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
if($_SERVER["REQUEST_METHOD"] == "POST") {
        $un_roll = $_POST['un_roll'];
		
//echo $un_roll; 
$query=mysqli_query($con,"SELECT * FROM 2023_27_2024_2028 WHERE University_Reg_NO= '$un_roll' ");
$result=mysqli_fetch_array($query);
//print_r($result);
}

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
			<input class="form-control" name="un_roll" id="cfull" value="">         
			</div>
			<div class="col-lg-6">
			<input type="submit" class="btn btn-primary" name="submit" value="Search Student"></button>       
			</div>
	   </div>	
	</div>	
	</form>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>College Leaving Certificate</title>
  
  <style>
    :root{--accent:#0b5ea8;--paper:#fff;--muted:#666}
    body{font-family: 'Segoe UI', Roboto, Arial, sans-serif; background:#f3f4f6; margin:24px}
    .container{max-width:900px;margin:0 auto}

    /* Form area (hidden when printing) */
    .controls{background:#fff;padding:16px;border-radius:8px;box-shadow:0 1px 4px rgba(0,0,0,.08);margin-bottom:18px}
    .row{display:flex;gap:12px;flex-wrap:wrap}
    .field{flex:1 1 200px;min-width:180px}
    label{display:block;font-size:13px;color:var(--muted);margin-bottom:6px}
    input[type="text"], input[type="date"], textarea, select{width:100%;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:14px}
    textarea{min-height:70px}
    .btn{display:inline-block;padding:8px 14px;border-radius:8px;background:var(--accent);color:#fff;border:none;cursor:pointer;margin-right:8px}
    .btn.secondary{background:#6b7280}

    /* Certificate styling */
    .certificate{background:var(--paper);padding:40px;border-radius:6px;border:1px solid #e6eef8;box-shadow:0 4px 18px rgba(11,94,168,0.06);position:relative}
    .header{display:flex;align-items:center;gap:18px;margin-bottom:18px}
    .logo{width:88px;height:88px;border-radius:8px;background:linear-gradient(135deg,#0b5ea8,#1e90ff);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:22px}
    .inst-name{font-size:22px;font-weight:700}
    .inst-sub{color:var(--muted);font-size:13px}

    .title{width:100%;text-align:center;margin:18px 0}
    .title h1{margin:0;font-size:28px;letter-spacing:1px}
    .title p{margin:6px 0;color:var(--muted)}

    .content{font-size:15px;line-height:1.7;color:#111;padding:0 24px}
    .content .field-line{margin:10px 0}
    .field-label{font-weight:600}

    .signature-row{display:flex;justify-content:space-between;align-items:flex-end;margin-top:36px;padding:0 24px}
    .sig-block{text-align:left}
    .sig-block .name{font-weight:700}
    .seal{width:120px;height:120px;border-radius:50%;border:3px dashed #d1e7ff;display:flex;align-items:center;justify-content:center;color:#0b5ea8;font-weight:700}

    /* Print styles */
    @media print{
      body{background:#fff;margin:0}
      .controls{display:none}
      .container{max-width:100%;margin:0}
      .certificate{box-shadow:none;border:none;padding:36px}
    }

    /* small screens */
    @media (max-width:520px){
      .header{flex-direction:column;align-items:flex-start}
      .signature-row{flex-direction:column;gap:18px}
    }
  </style>

<form method="post" action="print1.php">
  <div class="container">
<h3 style="margin-top:0;ont-family: inherit;
    font-weight: 1000;
    line-height: 1.1;
    color: inherit;
    text-align: center;
    color: blue;
	text-decoration: underline;">Fill Certificate Details</h3>
    <div class="controls" id="controls">
      
      <div class="row">
        <div class="field">
          <label>College / Institution Name</label>
          <input type="text" id="instName" value="PT. UJJWAL KUMAR MISHRA FOUNDATION COLLEGE " />
        </div>
        <div class="field">
          <label>College Address (short)</label>
          <input type="text" id="instAddr" value="HAJIPUR,VAISHALI" />
        </div>
        <div class="field">
          <label>Certificate Number</label>
          <input type="text" id="certNo" name="certNo" value="CLC/2025/0012" />
        </div>
      </div>

      <div class="row" style="margin-top:12px">
        <div class="field">
          <label>Student Name</label>
          <input type="text" id="studentName" name="studentName" value=" <?php echo !empty($result['Student Name']) ? $result['Student Name'] : ''; ?>" />
        </div>
        <div class="field">
          <label>Father / Guardian Name</label>
          <input type="text" id="fatherName" name="fatherName" value="<?php echo !empty($result['Father Name']) ? $result['Father Name'] : ''; ?>" />
        </div>
        <div class="field">
          <label>University / Roll No.</label>
          <input type="text" id="University_Reg_NO" name="University_Reg_NO" value="<?php echo !empty($result['University_Reg_NO'])?$result['University_Reg_NO']:''; ?>" />
        </div>
      </div>

      <div class="row" style="margin-top:12px">
        <div class="field">
          <label>Course / Program</label>
          <input type="text" id="CoreSubject" name="CoreSubject" value="<?php echo !empty($result['CoreSubject'])?$result['CoreSubject']:''; ?>" />
        </div>
        <div class="field">
          <label>Mother Name</label>
          <input type="text" id="mothe_name" name="mothe_name" value="<?php echo !empty($result['Mother Name'])?$result['Mother Name']:''; ?>	" />
        </div>
        <div class="field">
          <label>Date of Leaving</label>
          <input type="date" id="leavingDate" name="leavingDate" value="2024-05-28" />
        </div>
      </div>
 <div class="row" style="margin-top:12px">
        <div class="field">
          <label>Session</label>
          <input type="text" id="course" name="Session" value="<?php echo !empty($result['Session'])?$result['Session']:''; ?>" />
        </div>
        <div class="field">
          <label>Date of Admission</label>
          <input type="date" id="admissionDate" name="admissionDate" value=""2024-05-28"" />
        </div>
        <div class="field">
          <label>Date of Leaving</label>
          <input type="date" id="leavingDate" name="leavingDate" value="2024-05-28" />
        </div>
      </div>
      <div style="margin-top:12px">
        <label>Reason for Leaving (short)</label>
        <input type="text" id="reason" name="reason" value="Completed the course" />
      </div>

      <div style="margin-top:12px;display:flex;gap:8px;align-items:center">
        <button class="btn"  name="submit">Generate Certificate</button>
       </div>
    </div>

    
</form>
</body>

</html>
