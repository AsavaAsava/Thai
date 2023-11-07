<?php
@include 'config.php';

$select_products = mysqli_query($conn, "SELECT name,count(name) as total FROM `totalorder` group by name");
$data = array();
while ($row = mysqli_fetch_assoc($select_products)) {
    $data[] = $row;
}
print json_encode($data);

?>

