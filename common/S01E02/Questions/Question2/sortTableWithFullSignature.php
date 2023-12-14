<?php

require "../../SomeClass.php";

$class = new SomeClass();

$table = [
    ['name' => 'John', 'age' => 21],
    ['name' => 'Jane', 'age' => 20],
    ['name' => 'Doe', 'age' => 22],
];

// Check if the sort order is set in the query string
$order = $_GET['order'] ?? 'asc';

// Sort the table by age
$table = $class->sortTable($table, 'age', $order);

// Toggle the sort order
$newOrder = $order === 'asc' ? 'desc' : 'asc';

// Display the table
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Age</th></tr>";
foreach ($table as $row) {
    echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td></tr>";
}
echo "</table>";

// Add the button to toggle the sort order
echo "<button onclick=\"window.location.href='?order={$newOrder}'\">Toggle Sort Order</button>";