<?php
@include 'config.php';

$select_products = mysqli_query($conn, "SELECT order_status, count(order_status) as number FROM `totalorder` group by availability");
$data = array();
while ($row = mysqli_fetch_assoc($select_products)) {
    $data[] = $row;
}
print json_encode($data);

?>

