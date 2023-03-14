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
    .container {
        position: relative;
        width: 100%;
        height: 100%;
    }
    .moving-animation {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: move-text 2s ease-in-out forwards;
    }
    @keyframes move-text {
    from {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    to {
        top: 0;
        left: 0;
        transform: translate(0, 0);
    }
    }
</style>
<body background-color: #fae094>
    <div id="container">
        <img src="Logo4.png" height=auto width=auto class="moving-animation">
    </div>
</body>
</html>