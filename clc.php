<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $un_roll = $_POST['un_roll'];
		
//echo $un_roll; 
$query=mysqli_query($con,"SELECT * FROM 2023_27_2024_2028 WHERE University_Reg_NO= '$un_roll' ");
$result=mysqli_fetch_array($query);
//print_r($result);
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
	<div class="form-group">
		<div class="col-lg-4">
												
											</div>
											
											<!--- CLC CODE-->
	



											
											
											
										</div>		
								
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>College Leaving Certificate</title>
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

        body {
            background: #eee;
            font-family: "Times New Roman", serif;
        }

        .certificate {
            width: 210mm;
            height: 297mm;
            margin: auto;
            padding: 25mm;
            background: #fff;
            border: 20px solid #d4af37;   /* Outer gold */
            outline: 8px solid #1e3d59;   /* Inner navy blue */
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
            box-sizing: border-box;
            text-align: center;
        }

        .certificate h1 {
            font-size: 34px;
            margin: 0;
            color: #1e3d59;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .certificate h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 40px;
            margin: 15px 0;
            color: #d4af37;
        }

        .certificate p {
            font-size: 18px;
            line-height: 1.8;
            margin: 10px 0;
        }

        .content {
            margin-top: 30px;
            text-align: justify;
            font-size: 17px;
        }

        .seal {
            margin: 50px auto;
            border: 3px solid #1e3d59;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #1e3d59;
        }

        .footer {
            margin-top: 80px;
            display: flex;
            justify-content: space-between;
            font-size: 16px;
        }

        .sign {
            text-align: center;
            width: 40%;
        }

        .sign-line {
            margin-top: 70px;
            border-top: 1px solid #000;
        }

        .print-btn {
            text-align: center;
            margin: 20px;
        }

        /* Print Settings */
        @media print {
            body { background: #fff; }
            .certificate {
                box-shadow: none;
                margin: 0;
                width: 210mm;
                height: 297mm;
                page-break-inside: avoid;
            }
            @page {
                size: A4 portrait;
                margin: 15mm;
            }
            .print-btn { display: none; }
        }
    </style>
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
          <input type="text" id="certNo" value="CLC/2025/0012" />
        </div>
      </div>

      <div class="row" style="margin-top:12px">
        <div class="field">
          <label>Student Name</label>
          <input type="text" id="studentName" value="<?php echo $result['Student Name']; ?>" />
        </div>
        <div class="field">
          <label>Father / Guardian Name</label>
          <input type="text" id="fatherName" value="<?php echo $result['Father Name']; ?>" />
        </div>
        <div class="field">
          <label>University / Roll No.</label>
          <input type="text" id="rollNo" value="<?php echo $result['University_Reg_NO']; ?>" />
        </div>
      </div>

      <div class="row" style="margin-top:12px">
        <div class="field">
          <label>Course / Program</label>
          <input type="text" id="course" value="<?php echo $result['CoreSubject']; ?>" />
        </div>
        <div class="field">
          <label>Date of Admission</label>
          <input type="date" id="admissionDate" value="<?php //echo $result['Student Name']; ?>	" />
        </div>
        <div class="field">
          <label>Date of Leaving</label>
          <input type="date" id="leavingDate" value="2024-05-28" />
        </div>
      </div>
 <div class="row" style="margin-top:12px">
        <div class="field">
          <label>Session</label>
          <input type="text" id="course" value="<?php echo $result['Session']; ?>" />
        </div>
        <div class="field">
          <label>Date of Admission</label>
          <input type="date" id="admissionDate" value="<?php //echo $student['Student Name']; ?>	" />
        </div>
        <div class="field">
          <label>Date of Leaving</label>
          <input type="date" id="leavingDate" value="2024-05-28" />
        </div>
      </div>
      <div style="margin-top:12px">
        <label>Reason for Leaving (short)</label>
        <input type="text" id="reason" value="Completed the course" />
      </div>

      <div style="margin-top:12px;display:flex;gap:8px;align-items:center">
        <button class="btn" onclick="generate()">Generate Certificate</button>
        <button class="btn secondary" onclick="window.print()">Print</button>
        <button class="btn secondary" onclick="resetSample()">Reset Sample</button>
      </div>
    </div>

    <!-- Print Button -->
    <div class="print-btn">
        <button onclick="window.print()">🖨️ Print Certificate</button>
    </div>

    <!-- Certificate -->
    <div class="certificate">
        <h1>PT. UJJWAL KUMAR MISHRA FOUNDATION COLLEGE</h1>
        <p>Hajipur, Vaishali</p>
        <h2>College Leaving Certificate</h2>
        <p><b>Certificate No:</b> CLC/2025/0012</p>

        <div class="content">
            <p>
                This is to certify that <b>Guddu Kumar</b>, son/daughter of <b>Kameshwar Ray</b>,
                bearing University / Roll No. <b>176101041000123</b>, was admitted to the <b>History</b> program
                and left the institution on <b>28-05-2024</b>.
            </p>
            <p>
                <b>Reason for leaving:</b> Completed the course.
            </p>
            <p>
                During the period of study, his/her conduct was found to be satisfactory.
                He/She is eligible to receive bonafide documents as per college rules.
            </p>
            <p>
                This certificate is issued on the request of the student for all legitimate purposes.
            </p>
        </div>

        <div class="seal">Official Seal</div>

        <div class="footer">
            <div class="sign">
                <div class="sign-line"></div>
                Principal / Head <br>
                (College Authority)
            </div>
            <div class="sign">
                <div class="sign-line"></div>
                Registrar <br>
                Date: <?php echo date("d-m-Y"); ?>
            </div>
        </div>
    </div>

  </div>

  <script>
    function formatDateForView(iso){
      if(!iso) return '';
      const d = new Date(iso + 'T00:00:00');
      const dd = String(d.getDate()).padStart(2,'0');
      const mm = String(d.getMonth()+1).padStart(2,'0');
      const yyyy = d.getFullYear();
      return dd + '-' + mm + '-' + yyyy;
    }

    function generate(){
      document.getElementById('viewInstName').textContent = document.getElementById('instName').value || '---';
      document.getElementById('viewInstAddr').textContent = document.getElementById('instAddr').value || '---';
      document.getElementById('viewCertNo').textContent = document.getElementById('certNo').value || '---';
      document.getElementById('viewStudentName').textContent = document.getElementById('studentName').value || '---';
      document.getElementById('viewFatherName').textContent = document.getElementById('fatherName').value || '---';
      document.getElementById('viewRollNo').textContent = document.getElementById('rollNo').value || '---';
      document.getElementById('viewCourse').textContent = document.getElementById('course').value || '---';
      document.getElementById('viewAdmissionDate').textContent = formatDateForView(document.getElementById('admissionDate').value);
      document.getElementById('viewLeavingDate').textContent = formatDateForView(document.getElementById('leavingDate').value);
      document.getElementById('viewReason').textContent = document.getElementById('reason').value || '---';
      document.getElementById('viewPrintDate').textContent = formatDateForView(new Date().toISOString().slice(0,10));

      // Scroll to certificate for quick preview
      document.getElementById('certificate').scrollIntoView({behavior:'smooth'});
    }

    function resetSample(){
      document.getElementById('instName').value = 'PT. UJJWAL KUMAR MISHRA FOUNDATION COLLEGE ';
      document.getElementById('instAddr').value = '123 College Road, City - State';
      document.getElementById('certNo').value = 'CLC/2025/0012';
      document.getElementById('studentName').value = '';
      document.getElementById('fatherName').value = '';
      document.getElementById('rollNo').value = '2023ABC123';
      document.getElementById('course').value = 'Bachelor of Science (B.Sc)';
      document.getElementById('admissionDate').value = '2020-07-01';
      document.getElementById('leavingDate').value = '2024-05-28';
      document.getElementById('reason').value = 'Completed the course';
      generate();
    }

    // initialize
    window.addEventListener('load', function(){
      generate();
    });
  </script>


											
											<!-- stop code-->


								
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
