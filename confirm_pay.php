<?php
require("config.php");



$sql = "UPDATE totalorder
SET order_status = 2
WHERE id = ".$_POST['orderID'];

if (mysqli_query($conn,$sql)){
    echo "Update Successfully";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

    header('Location: http://localhost/ThaiTanic/bill_orders.php');
exit();

?>