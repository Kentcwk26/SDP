<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
</head>
<style>
    th,td {
        padding: 10px;
    }
    table {
        border-spacing: 5px;
    }
</style>

<body> 
    <h1>List of Customers</h1>
        <table border = 2>
            <tr>
                <center><th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Contact</th></center>
                <TH>gENDER</TH>
            </tr>
    <?php
        include 'dbcon.php';
        $query = 'SELECT * FROM customer';
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["cus_id"] . "</td>";
            echo "<td>" . $row["cus_name"] . "</td>";
            echo "<td>" . $row["cus_email"] . "</td>";
            echo "<td>" . $row["cus_contact"] . "</td>";
            echo "</tr>";
        }
        mysqli_close($connection);

        fhjfhfhfhfjfjufjfjyfyfyfjyddud
        fjyfjyfgvjfghjhvjjydydthgf

    ?>
    </table>
</body>
</html>

