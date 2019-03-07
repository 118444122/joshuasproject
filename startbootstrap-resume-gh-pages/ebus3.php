
<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <style>
    body{
        background-image:  url("https://cdn5.vectorstock.com/i/1000x1000/99/69/black-rhino-silhouette-background-sunset-vector-13379969.jpg");
        background-repeat: no-repeat;
        background-size: 1500px 1000px;
        </style>
        <body>
            <h1>Purchase Receipt</h1>
<!-- //Starting the session to get the session variable from last page-->
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$fullNumValue = $_POST['txtNum'];
echo "name: ".$fullNameValue.".";
echo "<br></br>";
echo "Number: ".$fullNumValue.".";
echo "<br></br>";
echo "total Price : € ".$totalValue2.".";

?>

</body>
<html>
