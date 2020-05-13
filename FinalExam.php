<?php
$server = "localhost";
$user = "root";
$pwd = "iCode0325";
$db = "comments";

$conn = mysqli_connect($server, $user, $pwd, $db);
if ($conn->connect_error) {
    die("Connection Failed");
} else {
    echo "<p style='color: aqua'> Successful Connection </p>";
}
//If Button Is Clicked 
if (isset($_GET['compute'])) {

    // prepare and bind
    $sql = "SELECT * FROM comments WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $resultCheck = $result->fetch_assoc();

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['comments'];
        }
    }
    //Query Data
    if (!mysqli_query($conn, $sql)) {
        echo 'Must Insert';
    } else {
        echo 'Inserted';
    }
    // header("refresh:15; url=index.php");
}
?>
<!DOCTYPE html>
<meta charset="UTF-8">

<head>
    <title>My Result</title>
</head>

<body>
    <button name="compute" type="submit">Click Here</button>
</body>

</html>