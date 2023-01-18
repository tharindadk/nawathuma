<!DOCTYPE html>
<html lang="en-US" dir="ltr">

    <head>

        <title>Sigiriya - Packages</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">

    </head>
    <body>
        <div class="navigation-bar">
            <nav role="navigation" aria-label="main menu">
                <div class="logo">
                    <a class="logo-button" href="../"><b>Nawathuma</b></a>
                </div>
                <ul class="nav-bar">
                    <li class="nav-list"><a class="nav-link" href="../">Home</a></li>
                    <li class="nav-list"><a class="nav-link" href="../places/">Places</a></li>
                    <li class="nav-list"><a class="nav-link" href="../about/">About</a></li>
                    <li class="nav-list"><a class="nav-link" href="../contact/">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div class="container">
            <h1>Booking Successful</h1> 
            <h2>All set to go</h2>  
            <hr>

            <?php
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "nawathuma");

                $addRow = "INSERT INTO customer (Name, Email, Phone_No, Start_Date)
                           VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]', '$_POST[startdate]')";

                mysqli_query($conn, $addRow);
            ?>

            <div class="submitted-image">
                <img src="../images/submitted.jpg" alt="" width="600px" height="288px">
            </div>

            <p>You have booked your preferred package successfully. Click the button below to view the payment method.</p>
            <a href="../contact/"><button class="payment-button">View Payment Method</button></a>
        </div>
    </body>
</html>