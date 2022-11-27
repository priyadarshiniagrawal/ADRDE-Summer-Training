<?php
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADRDE-PORTAL</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-xl-12"> 
            <h1 class="text-center pt-5">Address- ADRDE</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $n=1;
                    $sql= "select * from notes";
                    $result= mysqli_query( $conn, $sql);
                    while($row=mysqli_fetch_assoc($result)){

                    
                    
                    ?>
                    <tr>
                    <td><?php echo $n; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    </tr>
                    <?php
                     $n++;
                    }
?>
                    
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>