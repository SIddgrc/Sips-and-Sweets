<?php
$servername = "127.0.0.1";
$username = "SASHRD";
$password = "sashrd";
$database = "sas_sys";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT id, fname, mname, lname, address, nationality, bdate, gender, civil_status, email, cpno, fatname, fatbdate, motname, motbdate, pschool, saddress, yrgraduated, scndschool, scndsaddress, scndyrgraduated, tschool, tsaddress, tyrgraduated, wduration, cname, caddress, position, rfl, doe, cp, stype, sa, ssnumber, pinum, phnum, umpnum, ninum, pstnum FROM sashr";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Retrieved Form Data</title>
  <style>
    h2 {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      color: #ff85a2;
      font-size: 32px;
      margin-top: 10px;
      text-align: center; 
    }

    body {
      background-color: #fde7e7;
      font-family: Arial, sans-serif;
      font-size: 16px;
      margin-left: 5%;
      margin-top: 2.5%;
      line-height: 1.5em;
    }

    /* Form container */
    .form-data {
      max-width: 1250px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffc2d1;
      border-radius: 10px;
      box-shadow: 0 0 2px #fb6f92;
    }

    /* Form button */
    .form-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #fb6f92;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    /* Form button hover */
    .form-button:hover {
      background-color: #ffc2d1;
    }
  </style>
</head>
<body>
<h2>Application Data</h2>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fname = $row['fname'];
        $mname = $row['mname'];
        $lname = $row['lname'];
        $address = $row['address'];
        $nationality = $row['nationality'];
        $bdate = $row['bdate'];
        $gender = $row['gender'];
        $civil_status = $row['civil_status'];
        $email = $row['email'];
        $cpno = $row['cpno'];
        $fatname = $row['fatname'];
        $fatbdate = $row['fatbdate'];
        $motname = $row['motname'];
        $motbdate = $row['motbdate'];
        $pschool = $row['pschool'];
        $saddress = $row['saddress'];
        $yrgraduated = $row['yrgraduated'];
        $scndschool = $row['scndschool'];
        $scndsaddress = $row['scndsaddress'];
        $scndyrgraduated = $row['scndyrgraduated'];
        $tschool = $row['tschool'];
        $tsaddress = $row['tsaddress'];
        $tyrgraduated = $row['tyrgraduated'];
        $wduration = $row['wduration'];
        $cname = $row['cname'];
        $caddress = $row['caddress'];
        $position = $row['position'];
        $rfl = $row['rfl'];
        $doe = $row['doe'];
        $cp = $row['cp'];
        $stype = $row['stype'];
        $sa = $row['sa'];
        $ssnumber = $row['ssnumber'];
        $pinum = $row['pinum'];
        $phnum = $row['phnum'];
        $tax = $row['tax'];
        $umpnum = $row['umpnum'];
        $ninum = $row['ninum'];
        $pstnum = $row['pstnum'];

        echo "<div class ='form-data'>";
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
        echo "</div>";
    }
} else {
    echo "<p>No form data found.</p>";
}

// Close the connection
$conn->close();
?>
<a href="sas_hrd_newemployee.html" class="form-button">New Entry</a>
</body>
</html>
