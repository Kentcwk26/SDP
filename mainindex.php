<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Index</title>
    <link rel="icon" type="image/x-icon" href="Icon.png" >
</head>
<style>
    body{
        background-color: #fae094;
    }
    .container {
        position: relative;
        width: 100%;
        height: 100%;
    }
    .animate-text {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: move-up 2s forwards;
    }

    @keyframes move-up {
        0% {
            top: 50%;
        }
        100% {
            top: 15%;
        }
    }

</style>
<body>
    <div>
        <a href="mainindex.php"><img src="Logo4.png" height=auto width=auto class="animate-text"></a>
    </div>
</body>
</html>