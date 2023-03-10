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
        width:90%;
    }
    input[type=text:focus]{
        border: 3px solid #555;
    }
</style>
<body>
    <h2>Test 02 - Search Customer's Name</h2>/*bhsd*/
    <form action="test03.php" method=post target=blank id=searchbar>
        <input id="inputfield" type="text" placeholder="Search Anything Here" name="search" required><br>
        <br><input type="submit" value="Submit" name="submit">
    </form>
    <h2>Test 04 - Search Anything</h2>
    <form action="test04.php" method=post target=blank id=searchbar>
        <input id="inputfield" type="text" placeholder="Search Anything Here" name="searchanything" required><br>
        <br><input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
