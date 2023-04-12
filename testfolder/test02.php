<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 02</title>
</head>
<style>
    input[type=text]{
        padding: 10px;
        width:80%;
    }
    input[type=text:focus]{
        border: 3px solid #555;
    }
</style>
<body>
    <h2>Test 02 - Search Customer's Name</h2>
    <form action="test03.php" method=post target=blank id=searchbar>
        Customer's Name: <input id="inputfield" type="text" placeholder="Search Customer" name="search" required><br>
        <br><input type="submit" value="Submit" name="submit"> <input type="reset" value="Reset">
    </form><br>
    <h2>Test 04 - Search Anything</h2>
    <form action="test04.php" method=post target=blank id=searchbar>
        <input id="inputfield" type="text" placeholder="Search Anything Here" name="searchanything" required><br>
        <br><input type="submit" value="Submit" name="submit"> <input type="reset" value="Reset">
    </form><br>
    <h2>Test 05 - Filter</h2>
    <form action="test05.php" method=post target=blank id=searchbar>
        <input list="filter" name="filter"><br>
        <datalist id="filter">
            <option value="Customer's Name"></option>
            <option value="Customer's ID"></option>
        </datalist>
        <br><input type="submit" value="Submit" name="submit"> <input type="reset" value="Reset">
    </form><br>
</body>
</html>
