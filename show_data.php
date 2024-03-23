<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Data</title>
    <!-- bootstrp links -->
    <link rel="stylesheet" href="./assets/Bootstrap/css/bootstrap.min.css">
    <script src="./assets/Bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- fontawesome files linked -->
    <link rel="stylesheet" href="./assets/fonts/css/all.css">
    <script src="./assets/fonts/js/all.js"></script>
</head>

<body>


    <div class="container mt-3">
        <h2 class="text-center text-white bg-primary p-2 mb-3" style="background-color: greenyellow;">Dashboard</h2>
      
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Profession</th>
                    <th scope="col">Address</th>
                    <th scope= "col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php

                include("contact.php");
                $sql = "SELECT * FROM `clients` ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $age = $row['age'];
                        $profession = $row['profession'];
                        $address = $row['address'];
                        ?>

               <tr>
               <th><?php echo $id;  ?></th>
                <td><?php echo $name;  ?></td>
                <th><?php echo $email;  ?></th>
                <th><?php echo $age;  ?></th>
                <th><?php echo $profession;  ?></th>
                <th><?php echo $address;  ?></th>
                <td>
                          
                    <a href="delete.php?id=<?=$id?>"><i class="fas fa-trash fs-5 "></i></a>
                </td>
                </tr>
                    
               </tr>

          


                        <?php
                    }
                }
                ?>








            </tbody>
        </table>
    </div>

</body>

</html>