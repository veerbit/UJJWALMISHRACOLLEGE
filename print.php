<!DOCTYPE html>
<html>
<head>
    <title>College Leaving Certificate</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            background: #f5f5f5;
        }
        .certificate {
            width: 210mm;        /* A4 width */
            height: 297mm;       /* A4 height */
            margin: auto;
            padding: 20mm;
            background: #fff;
            border: 15px solid #4a90e2;
            outline: 10px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            text-align: center;
            box-sizing: border-box;
        }
        .certificate h1 {
            margin: 0;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .certificate h2 {
            margin: 10px 0;
            text-decoration: underline;
        }
        .content {
            text-align: left;
            margin-top: 25px;
            line-height: 1.8;
            font-size: 16px;
        }
        .seal {
            margin: 40px auto;
            border: 3px dashed #555;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #555;
        }
        .footer {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 14px;
        }
        .print-btn {
            text-align: center;
            margin: 20px;
        }

        /* Print settings */
        @media print {
            body {
                background: #fff;
            }
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
            .print-btn {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Print Button -->
    <div class="print-btn">
        <button onclick="window.print()">🖨️ Print Certificate</button>
    </div>

    <!-- Certificate Area -->
    <div class="certificate">
        <h1>PT. UJJWAL KUMAR MISHRA FOUNDATION COLLEGE</h1>
        <p>HAJIPUR, VAISHALI</p>
        <h2>College Leaving Certificate</h2>
        <p><b>Certificate No:</b> CLC/2025/0012</p>

        <div class="content">
            <p>This is to certify that <b>Guddu Kumar</b>, son/daughter of <b>Kameshwar Ray</b>, bearing University / Roll No. <b>176101041000123</b>,</p>
            <p>was admitted to the <b>History</b> program and left the institution on <b>28-05-2024</b>.</p>
            <p><b>Reason for leaving:</b> Completed the course.</p>
            <p>During the period of study, his/her conduct was found to be satisfactory. He/She is eligible to receive bonafide documents as per college rules.</p>
            <p>This certificate is issued on the request of the student for all legitimate purposes.</p>
        </div>

        <div class="seal">SEAL</div>

        <div class="footer">
            <div>
                Principal / Head <br>
                (PT. UJJWAL KUMAR MISHRA FOUNDATION COLLEGE)
            </div>
            <div>
                Registrar <br>
                Date: <?php echo date("d-m-Y"); ?>
            </div>
        </div>
    </div>

</body>
</html>
