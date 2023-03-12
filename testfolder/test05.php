<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 05 - Results</title>
</head>
<style>
    tr,td,th{
        text-align:center;
        padding:12px;
        padding-right: 20px;
        border-spacing: 12px;
    }
</style>
<body>
    <?php
        $filtersearch = $_POST['filter'];
        include 'dbcon.php';
        $query4 = "SELECT * FROM customer";
        $result4 = mysqli_query($connection,$query4);
        echo "Filter Search: ";
        echo $filtersearch;
        if ($filtersearch == "Customer's Name"){
            ?>
                <h2 id="content_title">Results</h2>
                <table border = 2>
                <tr>
                    <th>Customer Name</th>
                    <th>Customer ID</th>
                </tr>
            <?php
                while ($row = mysqli_fetch_assoc($result4)) {
                    echo "<tr>";
                    echo "<td>" . $row["cus_name"] . "</td>";
                    echo "<td>" . $row["cus_id"] . "</td>";
                    echo "</tr>";
                }
        } else {
            ?>
            <h2 id="content_title">Results</h2>
            <table border = 2>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
            </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result4)) {
                echo "<tr>";
                echo "<td>" . $row["cus_id"] . "</td>";
                echo "<td>" . $row["cus_name"] . "</td>";
                echo "</tr>"; 
        }
    }
        ?>
</body>
</html>