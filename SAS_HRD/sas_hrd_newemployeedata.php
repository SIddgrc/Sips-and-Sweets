<?php
$servername = "127.0.0.1";
$username = "SASHRD";
$password = "sashrd";
$database = "sas_sys";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$nationality = $_POST['nationality'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];
$civil_status = $_POST['civil_status'];
$email = $_POST['email'];
$cpno = $_POST['cpno'];
$fatname = $_POST['fatname'];
$fatbdate = $_POST['fatbdate'];
$motname = $_POST['motname'];
$motbdate = $_POST['motbdate'];
$pschool = $_POST['pschool'];
$saddress = $_POST['saddress'];
$yrgraduated = $_POST['yrgraduated'];
$scndschool = $_POST['scndschool'];
$scndsaddress = $_POST['scndsaddress'];
$scndyrgraduated = $_POST['scndyrgraduated'];
$tschool = $_POST['tschool'];
$tsaddress = $_POST['tsaddress'];
$tyrgraduated = $_POST['tyrgraduated'];
$wduration = $_POST['wduration'];
$cname = $_POST['cname'];
$caddress = $_POST['caddress'];
$position = $_POST['position'];
$rfl = $_POST['rfl'];
$doe = $_POST['doe'];
$cp = $_POST['cp'];
$stype = $_POST['stype'];
$sa = $_POST['sa'];
$ssnumber = $_POST['ssnumber'];
$pinum = $_POST['pinum'];
$phnum = $_POST['phnum'];
$tax = $_POST['tax'];
$umpnum = $_POST['umpnum'];
$ninum = $_POST['ninum'];
$pstnum = $_POST['pstnum'];

$sql = "INSERT INTO sashr (fname, mname, lname, address, nationality, bdate, gender, civil_status, email, cpno, fatname, fatbdate, motname, motbdate, pschool, saddress, yrgraduated, scndschool, scndsaddress, scndyrgraduated, tschool, tsaddress, tyrgraduated, wduration, cname, caddress, position, rfl, doe, cp, stype, sa, ssnumber, pinum, phnum, umpnum, ninum, pstnum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssss", $fname, $mname, $lname, $address, $nationality, $bdate, $gender, $civil_status, $email, $cpno, $fatname, $fatbdate, $motname, $motbdate, $pschool, $saddress, $yrgraduated, $scndschool, $scndsaddress, $scndyrgraduated, $tschool, $tsaddress, $tyrgraduated, $wduration, $cname, $caddress, $position, $rfl, $doe, $cp, $stype, $sa, $ssnumber, $pinum, $phnum, $umpnum, $ninum, $pstnum);

if ($stmt->execute()) {
    echo "Form data saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
