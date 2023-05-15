<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Profile Page</title>
    <link rel="icon" type="image/x-icon" href="png/Icon.png" >
</head>
<style>
    body{
        background-color: #C69468;
    }
    #block{
        height:70px;
        width: 650px;
        text-align:right;
        display:block;
        position:flex;
        float: left; 
        background-color: #DABA9E;
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
    #my-button{ 
        background-color: #f7d0af;
        padding: 10px 20px;
        display: inline-block;
        border-radius: 5px;
        margin-left: 50px;
        margin-right: 50px;
        font-weight: bold;
    }
    #word{
        margin-left: 400px;
    }
    #contentblock{
        height:200px;
        width: 620px;
        display:block;
        float: left;
        background-color: white;
    }
    #contentblock1{
        height:200px;
        width: 620px;
        display:block;
        float: right;
        background-color: white;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }

</style>
<body>
    <?php
        include "dbcon.php";
        include "header1.php";
    ?>
    <br>
    <b><h1 style="text-align:center"><u>Profile Page</u></h1></b>
    <table class="center">
        <tr>
            <td>Staff ID: </td>
            <td></td>
        </tr>
        <tr>
            <td>Staff Name: </td>
            <td></td>
        </tr>
        <tr>
            <td>Staff Username: </td>
            <td></td>
        </tr>
        <tr>
            <td>Contact Number: </td>
            <td></td>
        </tr>
        <tr>
            <td>Job: </td>
            <td></td>
        </tr>
    </table>
    <br>
    <table class="center" style="margin-top: 20px;">
        <tr>
            <td colspan="2"><input type="button" id="my-button" value="Cancel" onclick="window.open('editstaff.php','_self')">
            <td colspan="2"><input type="button" id="my-button" value="Log Out" onclick="window.open('logout.php','_self')">
        </tr>
    </table>
</body>
</html>