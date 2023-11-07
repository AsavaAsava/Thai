<?php

@include 'config.php';

function classify($num){
    if($num == 10){return 'Admin';}
    if($num == 20){return 'Waiter';}
    if($num == 30){return 'Inventory Worker';}
}

if(isset($_POST['add_user'])){
    $name=$_POST["name"];
    $mail=$_POST["email"];
    $pass=password_hash($_POST["password"], PASSWORD_DEFAULT);
    $type=$_POST["type"];
    
    
    
    $sql = "INSERT INTO  users (name,email,password,user_type)
     VALUES ('$name','$mail','$pass','$type')";

    $insert_query = mysqli_query($conn,$sql);

   if($insert_query){
      $message[] = 'User added succesfully';
   }else{
      $message[] = 'Could not add the user';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `users` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin_add_users.php');
      $message[] = 'User has been deleted';
   }else{
      header('location:admin_add_users.php');
      $message[] = 'User could not be deleted';
   };
};



if(isset($_POST['update_user'])){

    $update_name=$_POST["update_name"];
    $update_mail=$_POST["update_email"];
    $update_pass=password_hash($_POST["update_password"], PASSWORD_DEFAULT);
    $update_type=$_POST["update_type"];
   
   $update_query = mysqli_query($conn, "UPDATE `users` SET name = '$update_name', email = '$update_mail', password = '$update_pass', user_type ='$update_type' WHERE id = '$update_id'");

   if($update_query){
      
      header('location:admin_add_users.php');
      $message[] = 'User updated succesfully';
   }else{
      
      //header('location:admin_add_users.php');
      $message[] = 'User could not be updated';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Users</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="icon" type="image/x-icon" href="flav.png">
    <style>
      <?php include '.\css\style.css'; ?>
   </style>

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header2.php'; ?>

<div class="container">
<body bgcolor=#252837>
<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a User</h3>
                    <input type="text" name="name" placeholder="First Name" class="box">
                
                    
                    <select name="type" class="box">
                        <option value ="" disabled selected>Choose User Type</option>
                        <option value ="20">Waiter</option>
                        <option value ="10">Admin</option>
                        <option value ="30">Inventory</option>
                        <option value ="40">Customer</option>
                    </select>
                    
                    <input type="email" name="email" placeholder="E-Mail Address" class="box">
 	                <input type="password" name="password" placeholder="Password" class="box">
                    <input type="password" name="passwordConfirm" placeholder="Re-type Password" class="box">
                    
                    <input type="submit" name="add_user" value="Register" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>Name</th>
         <th>Email</th>
         <th>Type</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         
            $select_users = mysqli_query($conn, "SELECT * FROM `users`");
            if(mysqli_num_rows($select_users) > 0){
               while($row = mysqli_fetch_assoc($select_users)){
         ?>

         <tr>
    
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo classify($row['user_type']); ?></td>
            <td>
               <a href="admin_add_users.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
             </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <input type="text" name="update_name" placeholder="First Name" value="<?php echo $fetch_edit['name']?>" class="box">
      <select name="update_type" class="box">
                        <option value ="" disabled selected>Choose User Type</option>
                        <option value ="20">Waiter</option>
                        <option value ="10">Admin</option>
                        <option value ="30">Inventory</option>
                    </select>
                    
                    <input type="email" name="update_email" placeholder="E-Mail Address" value="<?php echo $fetch_edit['email']?>"class="box">
                    <input type="password" name="update_password" placeholder="New password" class="box">
      <input type= "submit" value="update the user" name="update_user" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>