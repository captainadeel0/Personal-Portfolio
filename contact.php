<?php




    // database connection
$conn = mysqli_connect("localhost", "root", "", "portfolio_db");
if (!$conn) {
    echo("database  connected");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $profession = $_POST['profession'];
    $address = $_POST['address'];
    

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO clients (name, email, age, profession, address) 
            VALUES ('$name', '$email', '$age', '$profession', '$address')";

$result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted successfully";
    }

   
}









?>