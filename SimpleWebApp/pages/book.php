<?php
  if (isset($_POST['add-cart'])) {
    $cookie_name = 'cart-data';
    $book_id = $_POST['book-id'];
    
    if (isset($_COOKIE[$cookie_name])) {
      $cookie_value = json_decode($_COOKIE[$cookie_name], true);
    }

    if (!isset($cookie_value[$book_id])) {
      $cookie_value[$book_id] = 1;
    } else {
      $cookie_value[$book_id] = $cookie_value[$book_id] + 1;
    }

    setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), '/');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Web App</title>

  <link rel="stylesheet" href="../styles/book.css?v<?php echo time() ?>">

  <script src='../data/books.js' defer></script>
  <script src='../script/book.js' defer></script>
</head>
<body>
  <div class='btn'>
    <a href='homepage.html' class='homepage-btn'>← Kembali</a>
    <a href='cart.php' class='cart-btn'>Keranjang →</a>
  </div>
  <div id='page' class='page'></div>
</body>
</html>
