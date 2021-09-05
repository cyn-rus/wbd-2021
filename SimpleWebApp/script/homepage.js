const container = document.getElementById('container')
const data = books.books

function generateThumbnail(book, i) {
  const div = document.createElement('div')
  div.classList.add('card')
  div.innerHTML = `
    <div class='image'>
      <img class='thumbnail-image' src=${book.primer['url-foto']} alt=${book.judul} />
    </div>
    <div class='description'>
      <div class='title'>
        <p>${book.judul}</p>
      </div>
      <div class='price'>
        <p>Rp ${book.primer.harga},00</p>
      </div>
    </div>
    `
  
  div.addEventListener('click', function() {
    location.href=`./book.php?i=${i}`
  })
  
  return div 
}

for (const i in data) {
  container.appendChild(generateThumbnail(data[i], i))
}