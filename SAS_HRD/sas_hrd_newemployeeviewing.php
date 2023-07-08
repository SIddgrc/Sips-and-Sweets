<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fde7e7; /* Updated pastel color pink */
      margin: 0;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #ffc2d1;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      margin-top: 0;
    }

    p {
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #fb6f92;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #ffc2d1;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Submission Result</h2>
    <?php
    // Retrieve and display form data
    if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['nationality']) && isset($_POST['bdate']) && isset($_POST['gender']) && isset($_POST['civil_status']) && isset($_POST['email']) && isset($_POST['cpno']) && isset($_POST['fatname']) && isset($_POST['fatbdate']) && isset($_POST['motname']) && isset($_POST['motbdate']) && isset($_POST['pschool']) && isset($_POST['saddress']) && isset($_POST['yrgraduated']) && isset($_POST['scndschool']) && isset($_POST['scndsaddress']) && isset($_POST['scndyrgraduated']) && isset($_POST['tschool']) && isset($_POST['tsaddress']) && isset($_POST['tyrgraduated']) && isset($_POST['wduration']) && isset($_POST['cname']) && isset($_POST['caddress']) && isset($_POST['position']) && isset($_POST['rfl']) && isset($_POST['doe']) && isset($_POST['cp']) && isset($_POST['stype']) && isset($_POST['sa']) && isset($_POST['ssnumber']) && isset($_POST['pinum']) && isset($_POST['phnum']) && isset($_POST['tax']) && isset($_POST['umpnum']) && isset($_POST['ninum']) && isset($_POST['pstnum'])) {

        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $nationality = $_POST["nationality"];
        $bdate = $_POST["bdate"];
        $gender = $_POST["gender"];
        $civil_status = $_POST["civil_status"];
        $email = $_POST["email"];
        $cpno = $_POST["cpno"];
        $fatname = $_POST["fatname"];
        $fatbdate = $_POST["fatbdate"];
        $motname = $_POST["motname"];
        $motbdate = $_POST["motbdate"];
        $pschool = $_POST["pschool"];
        $saddress = $_POST["saddress"];
        $yrgraduated = $_POST["yrgraduated"];
        $scndschool = $_POST["scndschool"];
        $scndsaddress = $_POST["scndsaddress"];
        $scndyrgraduated = $_POST["scndyrgraduated"];
        $tschool = $_POST["tschool"];
        $tsaddress = $_POST["tsaddress"];
        $tyrgraduated = $_POST["tyrgraduated"];
        $wduration = $_POST["wduration"];
        $cname = $_POST["cname"];
        $caddress = $_POST["caddress"];
        $position = $_POST["position"];
        $rfl = $_POST["rfl"];
        $doe = $_POST["doe"];
        $cp = $_POST["cp"];
        $stype = $_POST["stype"];
        $sa = $_POST["sa"];
        $ssnumber = $_POST["ssnumber"];
        $pinum = $_POST["pinum"];
        $phnum = $_POST["phnum"];
        $tax = $_POST['tax'];
        $umpnum = $_POST["umpnum"];
        $ninum = $_POST["ninum"];
        $pstnum = $_POST["pstnum"];

        // Display user information
        echo "<h2>User Information</h2>";
        echo "<p><strong>Name:</strong> $fname $mname $lname</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Nationality:</strong> $nationality</p>";
        echo "<p><strong>Birthdate:</strong> $bdate</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Civil Status:</strong> $civil_status</p>";
        echo "<p><strong>Email Address:</strong> $email</p>";
        echo "<p><strong>Phone Number:</strong> $cpno</p>";
        echo "<p><strong>Father's Name:</strong> $fatname</p>";
        echo "<p><strong>Father's Birthdate:</strong> $fatbdate</p>";
        echo "<p><strong>Mother's Name:</strong> $motname</p>";
        echo "<p><strong>Mother's Birthdate:</strong> $motbdate</p>";
        echo "<p><strong>Primary School:</strong> $pschool</p>";
        echo "<p><strong>School Address:</strong> $saddress</p>";
        echo "<p><strong>Year Graduated:</strong> $yrgraduated</p>";
        echo "<p><strong>Secondary School:</strong> $scndschool</p>";
        echo "<p><strong>School Address:</strong> $scndsaddress</p>";
        echo "<p><strong>Year Graduated:</strong> $scndyrgraduated</p>";
        echo "<p><strong>Tertiary School:</strong> $tschool</p>";
        echo "<p><strong>School Address:</strong> $tsaddress</p>";
        echo "<p><strong>Year Graduated:</strong> $tyrgraduated</p>";
        echo "<p><strong>Work Duration:</strong> $wduration</p>";
        echo "<p><strong>Company Name:</strong> $cname</p>";
        echo "<p><strong>Company Address:</strong> $caddress</p>";
        echo "<p><strong>Position:</strong> $position</p>";
        echo "<p><strong>Reason for Leaving:</strong> $rfl</p>";
        echo "<p><strong>Date of Employment:</strong> $doe</p>";
        echo "<p><strong>Company Position:</strong> $cp</p>";
        echo "<p><strong>Salary Type:</strong> $stype</p>";
        echo "<p><strong>Salary Amount:</strong> $sa</p>";
        echo "<p><strong>Social Security Number:</strong> $ssnumber</p>";
        echo "<p><strong>Pag-ibig Number:</strong> $pinum</p>";
        echo "<p><strong>Philippine Health Insurance Number:</strong> $phnum</p>";
        echo "<p><strong>Tax Number:</strong> $tax</p>";
        echo "<p><strong>Unified Multi-Purpose ID Number:</strong> $umpnum</p>";
        echo "<p><strong>National Identification Number:</strong> $ninum</p>";
        echo "<p><strong>Postal Number:</strong> $pstnum</p>";
    } else {
        echo "<p>No form data submitted.</p>";
    }
    ?>
  </div>
  <a href="sas_hrd_newemployee.html" class="btn">Go Back</a>
  <a href="sas_hrd_newemployee_viewentries.php" class="btn">View Entries</a>
</body>
</html>
