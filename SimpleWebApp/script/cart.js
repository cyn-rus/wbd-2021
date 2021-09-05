const data = books.books

function generateCard(img, total) {
  const idx = data.findIndex(book => book.primer['url-foto'] === img)
  return `
    <div class='cart-card'>
      <div class='img'>
        <img src='${img}' />
      </div>
      <div class='description'>
        <h2>${data[idx].judul}</h2>
        <h3 class='price'>Rp ${data[idx].primer.harga},00</h3>
        <h3 class='qty'>Jumlah di keranjang: ${total}</h3>
      </div>
    </div>
  `
}