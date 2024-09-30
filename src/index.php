<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Ordering System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Order Your Pizza</h1>
    <form action="order.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="size">Pizza Size:</label>
        <select id="size" name="size" required>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
            <option value="xlarge">Extra Large</option>
        </select><br><br>

        <label for="toppings">Toppings:</label><br>
        
        <input type="checkbox" id="pepperoni" name="toppings[]" value="Pepperoni">
        <label for="pepperoni">Pepperoni</label><br>
        
        <input type="checkbox" id="mushrooms" name="toppings[]" value="Mushrooms">
        <label for="mushrooms">Mushrooms</label><br>
        
        <input type="checkbox" id="onions" name="toppings[]" value="Onions">
        <label for="onions">Onions</label><br>

        <input type="checkbox" id="extra_cheese" name="toppings[]" value="Extra Cheese">
        <label for="extra_cheese">Extra Cheese</label><br>

        <input type="checkbox" id="sausage" name="toppings[]" value="Sausage">
        <label for="sausage">Sausage</label><br>

        <input type="submit" value="Order Pizza">
    </form>
</body>
</html>