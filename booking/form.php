<!DOCTYPE html>
<html lang="en-US" dir="ltr">
	<head>

        <title>Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link href="../css/style.css" rel="stylesheet">

    </head>

    <body>
        <script src="../js/script.js"></script>
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
            <h1>Booking Form</h1>
            <h2>Submit your details and mark your calender</h2>
            <hr>

            <div class="submitform">
                <form class="realform" action="submitted.php" method="POST">
                    <table class="formtable">
                        <tr>
                            <td>Package</td>
                            <td>
                            <b>
                            <?php
                                echo $_POST["package"];
                            ?>
                            </b>
                            </td>
                        <tr>

                        <tr>
                            <td>Price</td>
                            <td>
                            <b>
                            <?php
                                echo $_POST["price"];
                            ?>
                            </b>
                            </td>
                        <tr>

                        <tr>
                            <td>
                            <label for="name">Name</label>
                            </td>
                            <td>
                            <input name="name" id="name" type="text" required>    
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <label for="email">Email</label>
                            </td>
                            <td>
                            <input name="email" id="email" type="email" required>    
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <label for="phone">Phone Number</label>
                            </td>
                            <td>
                            <input name="phone" id="phone" type="tel" required>    
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <label for="startdate">Start Date</label>
                            </td>
                            <td>
                            <input name="startdate" id="startdate" type="date" required>    
                            </td>
                        </tr>
                    </table>

                    <button class="submitbutton" type="submit">Submit</button>
                
                </form>
            </div>
        </div>
    </body>
</html>