<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Web App</title>

  <link rel="stylesheet" href="../styles/homepage.css?v<?php echo time() ?>">

  <script src='../data/books.js' defer></script>
  <script src='../script/homepage.js' defer></script>
</head>
<body>
  <div class='cart-btn'>
    <a href='cart.php'>Keranjang →</a>
  </div>
  <div class='header'>
    <h1>Toko Buku</h1>
  </div>
  <div id='container' class='container'></div>
</body>
</html>
