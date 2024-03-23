<?php
 include("contact.php");

 $id = $_GET['id'];

 $sql = "DELETE FROM clients WHERE id = $id";
 $result = mysqli_query($conn , $sql);

    

    header("Location: show_data.php");

 


?>