<?php
@include 'config.php';

$select_products = mysqli_query($conn, "SELECT * FROM `inventory`");
$data = array();
while ($row = mysqli_fetch_assoc($select_products)) {
    $data[] = $row;
}
print json_encode($data);
                        ?>