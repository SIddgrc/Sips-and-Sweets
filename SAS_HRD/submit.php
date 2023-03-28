<?php
error_reporting(0);
    $Fullname = $_POST['full-name'];
    $Add = $_POST['address'];
    $Cn = $_POST['contact-number'];
    $Email = $_POST['email'];
    $Facebook = $_POST['facebook'];
    $Bday = $_POST['birthday'];
    $Fname = $_POST['fathers-name'];
    $Mname = $_POST['mothers-name'];
    $Civstats = $_POST['civil-status'];
    $Gender = $_POST['gender'];
    $Pschool = $_POST['primary-school']; 
    $Sschool = $_POST['secondary-school']; 
    $Tschool = $_POST['tertiary-school'];
    $Ygraduated = $_POST['year-graduated'];
    $Cname = $_POST['company-name'];
    $Position = $_POST['_position'];
    $Rfleaving = $_POST['rfleaving'];
    $Coname = $_POST['_company-name'];
    $DOE = $_POST['date-employed'];
    $P0sition = $_POST['position'];
    $Estats = $_POST['employment-status'];
    $Rate = $_POST['rate'];

    
echo "Full Name:" . $Fullname . "<br>"; 
echo "Adress:" . $Add . "<br>"; 
echo "Contact Number:" . $Cn . "<br>"; 
echo "Email:" . $Email . "<br>"; 
echo "Facebook:" . $Facebook . "<br>"; 
echo "Birthdate:" . $Bday . "<br>"; 
echo "Father's Name:" . $Fname . "<br>";
echo "Mother's Name:" . $Mname . "<br>"; 
echo "Civil Status:" . $Civstats. "<br>";
echo "Gender:" . $Gender. "<br>";
echo "Primary School:" . $Pschool. "<br>";
echo "Secondary School:" . $Sschool. "<br>";
echo "Tertiary School:" . $Tschool. "<br>";
echo "Year Graduated:" . $Ygraduated. "<br>";
echo "Company Name:" . $Cname. "<br>";
echo "Position:" . $Position. "<br>";
echo "Reason for leaving:" . $Rfleaving. "<br>";
echo "Company Name:" . $Coname. "<br>";
echo "Date Employed:" . $DOE. "<br>";
echo "Position:" . $P0sition. "<br>";
echo "Employment Status:" . $Estats. "<br>";
echo "Rate:" . $Rate. "<br>";



?>
