<?php

$servername = "db";
$username = "mysql_user";
$password = "mysqluserpassword";
$dbname = "pizza_ordering_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $size = htmlspecialchars($_POST['size']);
    $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];
    $toppingsString = implode(", ", $toppings); //convert array to string

    $statement = $conn->prepare("INSERT INTO orders (name, size, toppings) 
        VALUES (?, ?, ?)");
    $statement->bind_param("sss", $name, $size, $toppingsString);

    if ($statement->execute()) {


        echo "<h1>Order Confirmation</h1>";
        echo "<p>Thank you, $name, for your order!</p>";
        echo "<p>Pizza Size: $size</p>";
        echo "<p>Toppings:</p>";
        echo "<ul>";
        foreach ($toppings as $topping) {
            echo "<li>" . htmlspecialchars($topping) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Error: " . $statement->error;
    }

    // Close statement
    $statement->close();
}

$conn->close();
?>