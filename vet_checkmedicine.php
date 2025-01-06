<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<body>
    <div class="container-fluid my-5">
        <!-- <div class="justify-content-center align-items-center vh-100"> -->
        <div class="row justify-content-center">
            <div class="col-md-10 mt-2 rounded pb-3">
                <h1 class="text-primary p-2">Available Medicine</h1>
                <hr>
                <div class="form-inline">
                    <label for="search" class="font-weight-bold lead text-dark">Search:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="search" id="search_text" class="form-control form-control-lg rounded-0 border-primary" placeholder="ID/Medicine">
                </div>
                <hr>
                <?php
                    include 'config.php';
                    $stmt=$conn->prepare("SELECT * FROM medicine");
                    $stmt->execute();
                    $result=$stmt->get_result();
                ?>
                <table class="table table-hover table-light table-striped" id="table-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Medicine Name</th>
                            <th>Stock Quantity Left</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=$result->fetch_assoc()){ ?>
                            <tr>
                                <td><?= $row['medicine_id']; ?></td>
                                <td><?= $row['medicine_name']; ?></td>
                                <td><?= $row['medicine_stock']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <center><button type="button" class="btn btn-light" onclick="window.location.href='home2.php'">Back</button></center>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#search_text").keyup(function(){
                var search = $(this).val();
                $.ajax({
                    url:'action.php',
                    method:'post',
                    data:{query:search},
                    success:function(response){
                        $("#table-data").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>