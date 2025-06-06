<?php

include("config.php");

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:login.php');
}


if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `message` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_contacts.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../BOOKSTORE/css/admin_style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<?php include 'admin_header.php'; ?>



<section class="message_contact">

    <h1 class="title">message</h1>

    <div class="box-container">
    <?php 
        $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
        if(mysqli_num_rows($select_message) > 0){
            while($fecth_message = mysqli_fetch_assoc($select_message)){
    ?>
    <div class="box">
        <p> name : <span><?php echo $fecth_message['name']; ?></span> </p>
        <p> number : <span><?php echo $fecth_message['number']; ?></span> </p>
        <p> email : <span><?php echo $fecth_message['email']; ?></span> </p>
        <p> message : <span><?php echo $fecth_message['message']; ?></span> </p>
        <a href="admin_contacts.php?delete=<?php echo $fecth_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
    </div>
    <?php
        };
    }else{
        echo '<p class="empty">you have no message yet!</p>';
    }
    ?>
    </div>
</section>


<script src="../BOOKSTORE/js/admin_script.js"></script>


</body>
</html>