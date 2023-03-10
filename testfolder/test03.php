<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 03 - Results</title>
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
        $search = $_POST['search'];
        include 'dbcon.php';
        $query2 = " SELECT * FROM customer WHERE cus_name LIKE '%$search%'";
        $result2 = mysqli_query($connection,$query2);
        echo "Search: " ;
        echo $search;
        if (mysqli_num_rows($result2) > 0){
            ?>
                <h2 id="content_title">Results</h2>
                <table border = 2>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Contact</th>
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