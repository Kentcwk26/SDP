<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 03 - Results</title>
</head>
<body>
    <?php
        include 'dbcon.php';
        $query2 = ' SELECT * FROM customers WHERE cus_name LIKE %search% OR cus_id LIKE %search% OR cus_email LIKE %search% OR cus_contact LIKE %search%';
        $result2 = mysqli_query($connection,$query2);
        if (mysqli_num_rows($result2) > 0){
            ?>
                <h2 id="content_title">Results</h2>
                <table border = 2>
                <tr>
                    <center><th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Contact</th></center>
                </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result2)) {
                echo "<tr>";
                echo "<td>" . $row["cus_id"] . "</td>";
                echo "<td>" . $row["cus_name"] . "</td>";
                echo "<td>" . $row["cus_email"] . "</td>";
                echo "<td>" . $row["cus_contact"] . "</td>";
                echo "</tr>";
        }
        } else {
            echo "<h2>No results!</h2>"; 
        }
        ?>
</body>
</html>