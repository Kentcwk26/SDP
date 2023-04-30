<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="Icon.png" >
  <link rel="stylesheet" href="https://unpkg.com/transition-style">
  <title>Index</title>
</head>
<style>
  .animated {
    animation-duration: 2s;
    animation-fill-mode: both;
    animation-name: backInDown;
  }

  @keyframes backInDown {
    0% {
      opacity: 0;
      transform: translateY(-2000px) scaleY(0.7);
      transform-origin: 50% 100%;
    }
    90% {
      transform: translateY(10px) scaleY(1.1);
      transform-origin: 50% 100%;
    }
    100% {
      opacity: 1;
      transform: translateY(0) scaleY(1);
      transform-origin: 50% 100%;
    }
  }

  @import "transition-style";
  @keyframes wipe-in-top-right {
    0% {background-color: white;}
    20% {background-color: #d9bb97}
    40% {background-color: #f4c4c6}
    60% {background-color: #a0daea}
    80% {background-color: #a2d188}
    100% {background-color: #fae094;}
  }

  [transition-style="in:wipe:top-right"] {
    animation: 3.0s wipe-in-top-right both;
  }

</style>
<body transition-style="in:wipe:top-right">
    <center><br><br><br><br><br><br><br><br><br><a href="mainindex.php"><img class="animated" src="Logo.png"></a></center>
</body>
</html>