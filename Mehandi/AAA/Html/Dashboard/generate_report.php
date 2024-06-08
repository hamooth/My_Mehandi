<?php
$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=products_report.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('ID', 'Name', 'Description', 'Price', 'Image'));

$result = mysqli_query($conn, "SELECT * FROM products");

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

fclose($output);
mysqli_close($conn);
exit();
