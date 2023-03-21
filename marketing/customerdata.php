<?php
    $customerFn=$_POST['full-name'];
    $customerCInf=$_POST['contact-info'];
    $customerAdd=$_POST['address'];
    $customersComp=$_POST['company-name'];
    $customerBday=$_POST['bday'];
    $customerGender=$_POST['gender'];

    echo "Customers Full name " . $customerFn . "<br>";
    echo "Customers Contact Info: " . $customerCInf . "<br>";
    echo "Customers Address: " . $customerAdd . "<br>";
    echo "Customers Company Name: " . $customersComp . "<br>";
    echo "Customers Birthday: " . $customerBday . "<br>";
    echo "Customers Gender: " . $customerGender . "<br>";
?>