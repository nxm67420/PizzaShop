<?php
include_once 'dbConnection.php';
?>
<script type="text/javascript" src="file.js"></script>

<!-- //This Section Retrieves Info From Previous Page & Adds To Database -->
<?php

//Database Connection
$conn = mysqli_connect('localhost', 'root', 'iCode0325', 'pizzaShop');

//Checks correct Database is Selected
if (!mysqli_select_db($conn, $db)) {
    echo 'Database Not Selected';
}

//If Button Is Clicked 
if (isset($_GET['insert'])) {
    //Get Values From Form Values
    $pizzaSize = $_GET['sizes'];
    $pizzaCrust = $_GET['crust'];
    $pizzaSauce = $_GET['sauce'];
    $cheese = $_GET['cheese'];

    //Create Query 
    $sql = "INSERT INTO pizza_items (pizza_size, pizza_crust, pizza_sauce, cheese)
                            VALUES ('$pizzaSize', '$pizzaCrust', '$pizzaSauce', '$cheese')";


    //Query Data
    if (!mysqli_query($conn, $sql)) {
        echo 'Must Insert';
    } else {
        echo 'Inserted';
    }
    // header("refresh:15; url=index.php");
}
?>

<!-- //This Section Retrieves Current Orders Listed Within The Database -->
<?php
//Header Title
echo "<h1 style='color: yellowgreen'><em>Thank You, Order Complete!!</em></h1>";

//Gets Values From Chechboxes / Radio Buttons
$pizzaSize = $_GET['sizes'];
$pizzaCrust = $_GET['crust'];
$pizzaSauce = $_GET['sauce'];
$cheese = $_GET['cheese'];

//Query Statement
$sql = "SELECT * FROM pizza_items";

//Result --> Database --> 'Queries sql Statments' --> Fetches Results
$result = mysqli_query($conn, $sql) or die('Error Getting Results');

//Array To Hold Data*
$data = array();

//Checks Amount of Rows Returned
$resultCheck = mysqli_num_rows($result);

//If Results > 0 Print Results
if ($resultCheck > 0) {

    //Increase Wait Time By 15min According to Each Order Placed
    $counter = 15;

    //Prints Order Placed By Fetching Data From Database
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo "Size : " . $row['pizza_size'] . "<br>";
        echo "Crust : " . $row['pizza_crust'] . "<br>";
        echo "Sauce : " . $row['pizza_sauce'] . "<br>";
        echo "Cheese : " . $row['cheese'] . "<br>";
        echo "Order Placed: " . $row['date_ordered'];
        echo "<p style='border: 1px solid black; color : red; width: 200px'>Wait Time :" . $counter . " minutes </p>";

        //Buttons Determines When Order is Ready ? Cooked
        //echo "<input type='checkbox' id='Ready' onclick='orderReady()'>Order Ready</input> <input type='checkbox' id='Picked'>Picked Up</input><br><br>";
        echo "<button type='button' id='Cooked' onclick=''>Order Cooking</button> <button id='Ready' onclick='cooked()' onmousedown='cooked()' >Order Ready</button>";
        echo "<p id='ready'> </p>" . "  " . "<p id='picked'> </p>";
        $counter += 10;
    }
} else {
    print("No Results Found");
}
