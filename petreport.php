<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Appoinments</h2>
        <!-- <a class="btn btn-primary" href="/veteranian/generate.php" role="button">Appointment</a> -->
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>DateTime</th>
                    <th>Pet Type</th>
                    <th>Service</th>
                    <th>Venue</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'pet_care';
                //Connection
                $connection = new mysqli($host,$username,$password,$database);
                //Check Connection
                if($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                //Read rows from database table
                $sql = "SELECT booking.booking_id, customer.customer_name, booking.booking_datetime, booking.booking_service, booking.venue, pet.pet_type
                        FROM booking
                        INNER JOIN customer ON booking.customer_id = customer.customer_id
                        INNER JOIN pet ON booking.pet_id = pet.pet_id";
                
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);  
                }

                //Read data of row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>$row[booking_id]</td>
                        <td>$row[customer_name]</td>
                        <td>$row[booking_datetime]</td>
                        <td>$row[pet_type]</td>
                        <td>$row[booking_service]</td>
                        <td>$row[venue]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='generates2.php?id=$row[booking_id]'>Generate</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
        <center><button type="button" class="btn btn-light" onclick="window.location.href='home2.php'">Back</button></center>
    </div>
</body>
</html>