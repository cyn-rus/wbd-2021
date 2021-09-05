<?php
  if (isset($_POST['remove'])) {
    setcookie('cart-data', json_encode([]), time() + (86400 * 30), '/');
    header('Refresh: 0');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Web App</title>

  <link rel="stylesheet" href="../styles/cart.css?v<?php echo time()?>">

  <script src='../data/books.js'></script>
  <script src='../script/cart.js'></script>

</head>
<body>
  <div class='page'>
    <div class='btn'>
      <a href='homepage.php'>← Halaman Utama</a>
      <form action='' method='post'>
        <input name='remove' type='submit' value='Hapus isi keranjang' />
      </form>
    </div>
    <div class='header'>
      <h1>Keranjang</h1>
    </div>
    <?php
      $cart_data = json_decode($_COOKIE['cart-data'], true);
      if (count($cart_data) === 0) {
        echo "
          <div class='empty-cart'>
            <h2>Tidak ada barang di keranjang</h2>
          </div>
        ";
      } else {
        echo "<div class='filled-cart'>";
        foreach ($cart_data as $book_id => $total) {
          echo "
            <script type='text/javascript'>document.write(generateCard('$book_id', '$total'));</script>
          ";
        }
        echo "</div>";
      }
    ?>
  </div>
</body>
</html>
