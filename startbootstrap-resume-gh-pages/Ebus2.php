
<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;



/**
 * Allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
    <style>
    body{
        background-image:  url("https://www.1001ppt.com/wp-content/uploads/Background/Business/Business%20people%20silhouette%20PowerPoint%20background%20picture.jpg");
    background-repeat: no-repeat;
background-size: 1300px 1100px
    }
    </style>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                    <h1>Please enter your payment details</h1>
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""  /></td>
                        </tr>
                        <tr>
   
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
   
        <center>
             
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center >
        </div>
        </form>
    </body>
</html>

