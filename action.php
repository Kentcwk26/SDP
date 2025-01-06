<?php
    include 'config.php';
    $output='';

    if(isset($_POST['query'])){
        $search=$_POST['query'];
        $stmt=$conn->prepare("SELECT * FROM medicine WHERE medicine_name LIKE CONCAT('%',?,'%') OR medicine_id LIKE CONCAT('%',?,'%')");
        $stmt->bind_param("ss",$search,$search);
    }
    else{
        $stmt=$conn->prepare("SELECT * FROM medicine");
    }
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows>0){
        $output = "<thead>
                    <tr>
                        <th>ID</th>
                        <th>Medicine Name</th>
                        <th>Stock Quantity Left</th>
                    </tr>
                </thead>
                <tbody>";
                while($row=$result->fetch_assoc()){
                    $output .="
                    <tr>
                        <td>".$row['medicine_id']."</td>
                        <td>".$row['medicine_name']."</td>
                        <td>".$row['medicine_stock']."</td>
                    </tr>";
                }
                $output .="</tbody>";
                echo $output;
            }
            else{
                echo "<h3>No Records Found!</h3>";
            }
?>