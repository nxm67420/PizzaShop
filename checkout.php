<?php
include 'dbConnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="pizzaShop.css">
</head>

<body>
    <div id="checkoutForm" style="background-color: grey;opacity: 0.9; width: 500px; height: 550px; position:absolute;margin-left: 450px;margin-top: 100px">
        <form action="currentOrders.php" method="$_GET">
            <div style="width: 150px;height: 410px; margin-left: 180;margin-top:1%; position:absolute;font-size:20px">

                <label for="first"><span style="display: inline; color:red">*</span>First Name:</label>
                <br><input type="text" name="first">

                <label for="last"><span style="display: inline; color:red">*</span> Last Name:</label>
                <br><input type="text" name="last">

                <label for="first"><span style="display: inline; color:red">*</span> Name:</label>
                <br><input type="text" name="first">

                <br><label for="street1"><span style="display: inline; color:red">*</span>Street 1:</label>
                <br><input type="text" name="street1">

                <br><label>Street 2:</label>
                <br><input type="text" name="street2">

                <br><label>Apt#:</label>
                <br><input type="text" name="apt">

                <br><label><span style="display: inline; color:red">*</span>City:</label>
                <br><input type="text" name="city">

                <br><label><span style="display: inline; color:red">*</span>State:</label>
                <br><input type="text" name="state">

                <br><label><span style="display: inline; color:red">*</span>Zipcode:</label>
                <br><input type="text" name="zip">

                <br><label><span style="display: inline; color:red">*</span>Phone Number:</label>
                <br><input type="text" name="phone">

                <br><label><span style="display: inline; color:red">*</span>Email:</label>
                <br><input type="text" name="email">
                <br>
                <br><input type="submit" value="Submit Order" style="font-size: 40px; margin-left:20">
            </div>
        </form>
    </div>
</body>

</html>