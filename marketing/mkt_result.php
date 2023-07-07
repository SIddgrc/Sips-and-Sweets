<!Doctype html>
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
            <h2>Form Submision Result</h2>

            <?php
            // Retrieve and display form data
            if (isset($_POST['full-name']) && isset($_POST['contact-info']) && isset($_POST['address']) && isset($_POST['company-name']) && isset($_POST['bday']) && isset($_POST['gender'])) {
                include 'mkt.php';

                $name = $_POST['full-name'];
                $contact = $_POST['contact-info'];
                $address = $_POST['address'];
                $company = $_POST['company-name'];
                $birthday = $_POST['bday'];
                $gender = $_POST['gender'];


                echo "<p><strong>Full Name:</strong>" . $name . "</p>";
                echo "<p><strong>Contact Number/Email:</strong>" . $contact . "</p>";
                echo "<p><strong>Address:</strong>" . $address . "</p>";
                echo "<p><strong>Company name:</strong>" . $company . "</p>";
                echo "<p><strong>Birthday:</strong>" . $birthday . "</p>";
                echo "<p><strong>Gender:</strong>" . $gender . "</p>";

            } else {
                echo "<p>No Form Data Submitted.</p>";
            }
            ?>

            <a href="sas_mkt.html" class="btn">Go Back</a>
            <a href="mkt_view.php" class="btn">View Entries</a>
        </div>
    </body>
    </html>