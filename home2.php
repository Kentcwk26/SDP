<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "db_conn.php";
include 'php/User.php';
$user = getUserById($_SESSION['id'], $conn);


 ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Schedule</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style7.css">
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
    body{
        background-color: #ffffa1;
    }

    #loginblock{
        height:70px;
        width: 600px;
        text-align:right;
        display:block;
        position:flex;
        float: left;
        background-color: #DABA9E;
    }

    .my-button {
  display: inline-block;
  margin: 10px;
  padding: 12px 24px;
  background-image: linear-gradient(to bottom, #007bff, #0062cc);
  border-radius: 4px;
}

.my-button a {
  text-decoration: none;
  color: #ffffff;
  font-weight: bold;
}

.my-button:hover {
  background-image: linear-gradient(to bottom, #0062cc, #007bff);
}

    #my-button{ 
        background-color: #f7d0af;
        padding: 20px 40px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 30px;
        margin-right: 30px;
        font-weight: bold;
    }

    #button{ 
        margin-left: 90px;
        margin-right: 90px;
        display: inline-block;
    }

    #word{
        margin-right: 200px;
    }

    #block{
        float: left;
        margin-left: 350px;
        margin-right: 50px
    }

  *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

.container{
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    /* min-height: 100vh; */
}

.card{
    position: relative;
    /* width: 400px; */
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 5px 15px 1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 60%;
}

.card:before{
    content: '';
    position: absolute;
    width: 100%;
    height: 270px;
    top: 0;
    left: 0;
    background-image: linear-gradient(to top, #00f2fe, #4facfe);
    clip-path: circle(400px at 50% -48.5%);
}

.header{
    position: relative;
    height: 265px;
}

.mail{
    position: absolute;
    top: 1rem;
    right: 2rem;
    font-size: 1.5rem;
    color: #fff;
    opacity: .8;
    transition: .3s;
    z-index: 3;
    text-decoration: none;
}

.mail:hover{
    opacity: 1;
}

.hamburger-menu{
    position: absolute;
    width: 21px;
    height: 16px;
    top: 1.4rem;
    left: 1.9rem;
    z-index: 3;
    cursor: pointer;
    transition: .3s;
    opacity: .8;
}

.hamburger-menu:hover{
    opacity: 1;
}

.hamburger-menu .center{
    position: absolute;
    height: 2px;
    width: 70%;
    top: 50%;
    transform: translateY(-50%);
    background-color: #fff;
    border-radius: 1px;
}

.hamburger-menu:before, .hamburger-menu:after{
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    border-radius: 1px;
    background-color: #fff;
}

.hamburger-menu:before{
    top: 0;
}

.hamburger-menu:after{
    bottom: 0;
}

.main{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.main .image{
    position: relative;
    width: 110px;
    height: 110px;
    border-radius: 50%;
    background: url('img/profile.jpg') no-repeat center / cover;
    border: 4px solid #00d8fe;
    margin-bottom: 2px;
    overflow: hidden;
    cursor: pointer;
}

.image .hover{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(79, 172, 254, .7);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    transition: .5s;
    opacity: 0;
}

.image:hover .hover{
    opacity: 1;
}

.hover.active{
    opacity: 1;
}

.name{
    font-size: 1.2rem;
    color: #fff;
    font-weight: 500;
    line-height: 1;
    margin: 5px 0;
}

.sub-name{
    font-family: 'Cutive Mono', monospace;
    font-size: 1.2rem;
    opacity: .8;
    color: #fff;
}

.content{
    /* display: flex; */
    padding: 1.7rem 2.5rem 2.6rem 2.5rem;
}

.right{
    padding-top: 1.5rem;
    display: flex;
    flex-direction: column;
    text-align: right;
    align-items: flex-end;
    justify-content: space-between;
    margin-left: 2.1rem;
}

.number{
    font-size: 2.1rem;
    font-weight: 200;
    color: #333;
    line-height: 1.2;
}

.number-title{
    font-size: .55rem;
    color: #666;
    font-weight: 400;
    line-height: 1;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.title{
    position: relative;
    color: #555;
    font-weight: 500;
    font-size: 1.1rem;
    padding: 0 0 3px 0;
    margin-bottom: .9rem;
    display: inline-block;
}

.title:after{
    content: '';
    position: absolute;
    height: 3px;
    width: 50%;
    background-color: #555;
    bottom: 0;
    left: 0;
}

.text{
    color: #666;
    font-weight: 300;
    line-height: 1.7;
}

.icons-container{
    padding: 1rem 0;
}

.icon{
    color: #c4c4c4;
    font-size: 1.3rem;
    text-decoration: none;
    margin-right: 8px;
    transition: .3s;
}

.icon:hover{
    color: #4facfe;
}

.buttons-wrap{
    display: flex;
    margin-top: 5px;
}

.follow-wrap, .share-wrap{
    flex: 4;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: .5s;
}

.follow-wrap:hover, .share-wrap:hover{
    flex: 5;
}

.follow{
    padding: 9.6px 0;
    width: 100%;
    background: linear-gradient(to right, #4facfe 0%, #00f2fe 140%);
    color: #fff;
    text-align: center;
    text-decoration: none;
    font-size: .7rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 18.1px;
    margin-right: 3px;
}

.share{
    padding: 7.6px 0;
    width: 100%;
    border: 2px solid #4facfe;
    color: #4facfe;
    text-decoration: none;
    text-align: center;
    font-size: .7rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-left: 3px;
    border-radius: 18.1px;
}

.modal{
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: -1;
    opacity: 0;
    transition: .5s;
}

.modal img{
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-50%, -50%) scale(.3);
    max-width: 100%;
    max-height: 100%;
    transition: .5s;
}

.modal.show{
    opacity: 1;
    z-index: 99;
}

.modal.show img{
    top: 50%;
    transform: translate(-50%, -50%) scale(1);
}

.close{
    position: absolute;
    top: 1rem;
    right: 1rem;
    width: 30px;
    height: 30px;
    cursor: pointer;
    transition: .3s;
}

.close:hover{
    opacity: .5;
}

.close:before, .close:after{
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    border-radius: 1.5px;
    top: 50%;
    left: 50%;
    background-color: #fff;
}

.close:before{
    transform: translate(-50%, -50%) rotate(45deg);
}

.close:after{
    transform: translate(-50%, -50%) rotate(135deg);
}

@media (max-width: 410px){
    .content{
        flex-direction: column;
    }

    .right{
        flex-direction: row;
        text-align: center;
        justify-content: space-around;
        align-items: center;
        margin: 0;
    }
}

@media (max-width: 370px){
    .header{
        height: 230px;
    }

    .card:before{
        clip-path: circle(400px at 50% -74.5%);
        height: 230px;
    }

    .hamburger-menu{
        width: 16px;
        height: 12px;
        top: 1.1rem;
        left: 1.5rem;
    }

    .mail{
        font-size: 1.1rem;
        top: .75rem;
        right: 1.5rem;
    }

    .main .image{
        width: 90px;
        height: 90px;
        border-width: 3px;
    }

    .name, .sub-name{
        font-size: 1rem;
    }

    .content{
        padding: 1.2rem 1.8rem 1.8rem 1.8rem;
    }

    .number{
        font-size: 1.8rem;
    }

    .number-title{
        font-size: .4rem;
    }

    .right{
        padding-top: 1rem;
    }

    .title{
        font-size: .9rem;
        margin-bottom: .5rem;
    }

    .text{
        font-size: .8rem;
    }

    .icons-container{
        padding: .5rem 0;
    }

    .icon{
        font-size: 1.1rem;
    }

    .follow{
        padding: 7.6px 0;
        border-radius: 14.6px;
        font-size: .6rem;
    }

    .share{
        padding: 5.6px 0;
        border-radius: 14.6px;
        font-size: .6rem;
    }
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  padding: 8px;
  font-size: 0.9em;
  /* min-width: 400px; */
  width: 70%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); */
  box-shadow: 0 5px 10px #e1e5ee;
  background-color: white;
  text-align: left;
}

.content-table thead {
    box-shadow: 0 5px 10px #e1e5ee;
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th {
    padding: 1rem 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;
    font-size: 0.7rem;
    font-weight: 900;
}

.content-table td {
    padding: 1rem 2rem;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

/* Updated Styling */

.content-table thead tr {
    background-color: #333333;
    color: #ffffff;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f9f9f9;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #333333;
}

header {
    position: fixed;
    top:0;
    left:0;
    width:100%;
    padding:20px 100px;
    background: #D9BB97;
    display:flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}

.navigation a {
    position:relative;
    font-size: 1.1em;
    color:#fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
    margin-top: 20px;
}

.navigation a::after {
    content: '';
    position:absolute;
    left: 0;
    bottom: -6px;
    width:100%;
    height:3px;
    background:#fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;
}

.navigation a:hover::after {
    transform-origin: left;
    transform: scaleX(1);
}

</style>
<body>
    
    <br>
    <br>
    <br>
    <div class="modal">
        <img src="img/profile.jpg" alt="">
        <div class="close"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <header>
        <h2><img src="png/Logo4.png" width="150px" height="140px"></h2>
        <nav class="navigation">
            <a href="about3.php">About Us</a>
            <a href="privacynotes.php">Privacy Notes</a>
        </nav>
    </header>
    
    <div class="container" style="padding-top: 50px">
        <div class="card">
            <div class="header">
                <!-- <div class="hamburger-menu">
                    <div class="center"></div>
                </div> -->
                <a href="#" class="mail">
                    <i class="far fa-envelope"></i>
                </a>
                <div class="main">
                    <div class="image" style="background: url('upload/<?=$user['pp']?>') no-repeat center / cover;"></div>
                    <div class="hover">
                        <i class="fas fa-camera fa-2x"></i> 
                    </div>
                    <h3 class="name"><?=$user['fname']?></h3>
                    <h3 class="sub-name"><?=$user['username']?></h3>
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">About</h3>
                        <p class="text"><?=$user['descriptions']?></p>
                    </div>
                    <div class="icons-container">
                        <a href="#" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="buttons-wrap">
                        <div class="follow-wrap">
                            <a href="edit.php" class="follow">Edit</a>
                        </div>
                        <div class="share-wrap">
                            <a href="vet_logout.php" class="share">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>

    <!-- <div id="block"><img src="doctor_icon.jpg" height=170px width=160px></div><div id="word">Dr.ABC (V02)</div><br><div id="word">Email: drpetparadise01@gmail.com</div><div id="word">Contact Number: +6012-3456789</div><br><div id="word">Job: Vet</div><br><div id="word">- Joined since 2016</div><div id="word">- 4 years of experience</div></div> -->
    <br>
    <br>
    <center>
    <div class="my-button"><a href="petreport.php">Report</a></div>
    <div class="my-button"><a href="test.php">Available Medicine</a></div>
    </center>
    <br>
    <br>
    <br>
    
<center><p style="font-size: 24px; font-weight: bold; color: #ff3366; text-decoration: underline;">My Schedule</p></center>
    <div class="container">
      <table class="content-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>DateTime</th>
              <th>Service</th>
            </tr>
          </thead>
          
          <tbody>
            <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'pet_care';
            $connection = mysqli_connect($host,$username,$password,$database);
        
            if ($connection == false){
                die ('Connect failed'.mysqli_connect_error());
            }
            
            $sql = "SELECT * FROM appointment";
            $result = $connection->query($sql);

            if(!$result) {
                die("Invalid query: " . $connection->error);
            }
            // read data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["appointment_id"] . "</td>
                    <td>" . $row["customer_id"] . "</td>
                    <td>" . $row["appointment_datetime"] . "</td>
                    <td>" . $row["appointment_service"] . "</td>
                </tr>";
            }
            ?>
          </tbody>
        </table>
    </div>
</body>
</html>
<?php }else {
	header("Location: vet_login.php");
	exit;
} ?>