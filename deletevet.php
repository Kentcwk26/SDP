<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="png\Icon.png">
    <title>Delete Vet</title>
<style>
    #box{
        width: 1468px;
        height: 100%;
        background-color: #f1f1f1;
        border: 1px solid black;
        border-radius: 5px;
        padding: 16px;
        font-size: 16px;
    }
    #adminIndexHeader{
        width: 200px;
        height: 150px;
        padding-top: 10px;
        padding-bottom: 20px;
    }
    td{
        width: 200px;
        padding: 16px;
        font-size: 18px;
        text-align: left;
    }
    .circular-img {
        width: 185px;
        height: 185px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        padding: 8px;
        float: right;
    }
    input[type=button], input[type=submit]{
        width: 100px;
        height: 30px;
        margin: 5px;
        border-radius: 10%;
        font-size: 14px;
    }
    input[type=button]:active, input[type=submit]:active {
        box-shadow: 0 5px none;
        transform: translateY(2px);
    }
    input[type=button]:hover{
        background-color: black;
        color: white;
        font-weight:bold;
        cursor: pointer;
    }
    input[type=submit]:hover{
        background-color: red;
        color: black;
        font-weight:bold;
        cursor: pointer;
    }
    .circleavatar{
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background-color: #D9BB97;
        margin: 10px;
        flex-direction: column;
    }
</style>
</head>
<body>
    <?php
        include "dbcon.php";
        include "sidemenu.php";
        sleep(1);
    ?>
    <center><div id="adminIndexHeader"><a href="admin.php"><img src="png\Logo4.png"></a></div></center>
    <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM vet where vet_id = '$id'";
        $result = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($result)){
            $id = $row['vet_id'];
            $name = $row['vet_name'];
            $contact = $row['vet_contact'];
            $desc = $row['vet_desc'];
        ?>
    <div id="box">
        <center><h1 style="padding-top: 5px"><b>Vet Information</b></h1>
        <table>
            <tr>
                <td>Vet ID:</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>Vet Name:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Vet Contact:</td>
                <td><?php echo $contact; ?></td>
            </tr>
            <tr>
                <td>Vet Description:</td>
                <td><?php echo $desc; ?></td>
            </tr>
        </table>
        <form action="#" method="POST">
        <h3 style="color: red">Are you sure to delete this customer record? This cannot be unchanged once click the 'Delete' button.</h3>
            <input type="submit" name="delete" value="Delete">
            <input type="button" value="Cancel" onclick="window.open('managevet.php','_self')"></center><br>
        </form>
        <?php
            if(isset($_POST['delete'])){
                $query1 = "DELETE from vet where vet_id = '$id'";
                $result = mysqli_query($connection,$query1);
                if($result){
                    echo "<script>alert('vet record deleted successfully!')</script>";
                    echo "<script>window.open('managevet.php','_self')</script>";
                } else {
                    echo "<script>alert('failed to delete!')</script>";
                }
            }
            }   
            mysqli_close($connection);
        ?>
    </div><br>
</body>
</html>