<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php  
   //paki  (/**/) delete na lang po ung commennts if gagamitin need lang add ulet ng comment if mag excute ng ibang query
   // select all records from grocery_table

   /* $stmt = $pdo->prepare("SELECT * FROM grocery_table");
    if ($stmt->execute()) 
     echo "<pre>";
	 
     //pag magexcute remove // infront
        // print_r($stmt->fetchAll());  //number 5. show all records and display using print_r()
        // print_r($stmt->fetch());   //number 6. fetch() gets one row from the query result  

    echo "</pre>"; */

/* number 7. insert a new grocery item into the database
    $stmt = $pdo->prepare("INSERT INTO grocery_table 
(grocery_item_id, item_name, brand_name, category_name, unit_price, quantity_in_stock, supplier_name, expiration_date, date_added, is_available) 
VALUES (31, 'Potato Chips', 'Pringles', 'Snacks', 99.00, 40, 'Pringles Supplier', '2028-08-15', '2026-10-18', true)");

if ($stmt->execute()) {
    echo "Record inserted successfully!";
} */

// number 8. delete a grocery item 
/*$stmt = $pdo->prepare("DELETE FROM grocery_table WHERE grocery_item_id = 31");

if ($stmt->execute()) {
    echo "Record deleted successfully!";
}*/

// number 9. updating record from the database the price of the grocery item with ID 2
/* $stmt = $pdo->prepare("UPDATE grocery_table SET unit_price = 95.00 WHERE grocery_item_id = 2");
if ($stmt->execute()) {
    echo "Record updated successfully!";
    $stmt = $pdo->prepare("SELECT * FROM grocery_table WHERE grocery_item_id = 2");
    if ($stmt->execute()) {
        echo "<pre>";
        print_r($stmt->fetch());
        echo "</pre>";
    }
} */

// number 10. get all records from grocery_table
$stmt = $pdo->prepare("SELECT * FROM grocery_table");
$stmt->execute();

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Brand</th>
        <th>Price</th>
      </tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['grocery_item_id'] . "</td>";
    echo "<td>" . $row['item_name'] . "</td>";
    echo "<td>" . $row['brand_name'] . "</td>";
    echo "<td>" . $row['unit_price'] . "</td>";
    echo "</tr>";
}

echo "</table>";
	?>

	
</body>
</html>
