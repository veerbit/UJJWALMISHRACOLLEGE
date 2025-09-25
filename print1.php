<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
  
if(isset($_POST['submit'])){	
$s1=$_POST['studentName'];
$s2=$_POST['fatherName'];
$s3=$_POST['University_Reg_NO'];
$s4=$_POST['CoreSubject'];
$s5=$_POST['admissionDate'];
$s6=$_POST['leavingDate'];
$s7=$_POST['Session'];
$s8=$_POST['admissionDate'];
$s9=$_POST['leavingDate'];
$s10=$_POST['reason'];
$s11=$_POST['mothe_name'];
$s12=$_POST['certNo'];

} 
  }     
	
 ?>




<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

    <!-- Print Button -->
    <div class="print-btn">
        <button onclick="window.print()">🖨️ Print Certificate</button>
		<?php
// Redirect to a specific page
echo '<form method="post">
        <button type="submit" name="back">Go Back</button>
      </form>';

if(isset($_POST['back'])){
    header("Location: edit-course.php"); // replace with your page
    exit();
}
?>
    </div>

    <!-- Certificate -->
    <div class="certificate">
        <h1>PT. UJJWAL KUMAR MISHRA FOUNDATION COLLEGE</h1>
        <p>Hajipur, Vaishali</p>
        <h2>College Leaving Certificate</h2>
        <p><b>Certificate No:</b> <?php echo  $s12 ?></p>

        <div class="content">
            <p>
                This is to certify that <b><?php echo  $s1 ?></b>, son/daughter of <b><?php echo  $s2 ?></b>,Mother Name <b><?php echo  $s11 ?></b>
                bearing University / Roll No. <b><?php echo  $s3 ?></b>, was admitted to the <b><?php echo  $s4 ?></b> program
                and left the institution on <b><?php echo  $s5 ?></b>.
            </p>
            <p>
                <b>Reason for leaving:</b> <?php echo  $s10 ?>.
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

</body>
</html>
