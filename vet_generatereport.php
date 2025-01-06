<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pet_care';

//Connection
$connection = new mysqli($host,$username,$password,$database);

$id = "";
$cus = "";
$datetime = "";
$service = "";
$notes = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET method: Show data
    if (!isset($_GET["id"])) {
        header("location: petreport.php");
        exit;
    }
    $id = $_GET["id"];

    //read the row of the selected appointment from database table
    $sql = "SELECT * FROM booking WHERE booking_id = '$id'";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: petreport.php");
        exit;
    }

    $cus = $row["booking_id"];
    $datetime = $row["booking_datetime"];
    $service = $row["booking_service"];
    $notes = $row["comments"];
}
else {
    //POST method: Update data
    $id = $_POST["id"];
    $cus = $_POST["cus"];
    $datetime = $_POST["datetime"];
    $service = $_POST["service"];
    $notes = $_POST["notes"];

    do {
        if(empty($id) || empty($cus) || empty($datetime) || empty($service) || empty($notes)) {
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE booking " . "SET booking_id = '$cus', booking_datetime = '$datetime', booking_service = '$service', comments = '$notes' " . "WHERE booking_id = '$id'";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Report GENERATED successfully!";

        header("location: petreport.php");
        exit;

    } while (true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta cus="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Report</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<body>
    <div class="container my-5">
        <h2>Report</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="cus" value="<?php echo $cus; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="datetime" value="<?php echo $datetime; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="service" value="<?php echo $service; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Notes/Comments</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="notes" value="<?php echo $notes; ?>">
                </div>
            </div>

            <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="petreport.php" role="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>
</body>
</html>