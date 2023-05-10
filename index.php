<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>myshop</title>
</head>
<body>
    <div class="container my-5">
        <h2>List of clients:</h2>
        <a class="btn btn-primary" role="button" href="/myshop/create.php">New Client</a>
        <br>
        <table class="table">
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $username = "root";
                    $servername = "localhost";
                    $password ="";
                    $database = "myshop";

                    //Create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    //check conection
                

                    //read row from database table
                    $sql = "SELECT*FROM clients";
                    $result = $connection->query($sql);

                    //error de tu consulta
                    if(!$result){
                        die("Invalid query:".$connection->error);
                    }


                    //read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                        <a class='btn btn-primary btn-sm' href='/myshop/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/myshop/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                        ";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>