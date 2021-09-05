const page = document.getElementById('page')
const data = books.books

function parseKey(key) {
  const arr = key.split('-')
  let newKey = ''
  for (const word of arr) {
    newKey += word.charAt(0).toUpperCase() + word.slice(1) + ' '
  }
  return newKey.slice(0, -1)
}

function generatePage(i) {
  const div = document.createElement('div')
  div.classList.add('page-container')
  div.innerHTML = `
    <div class='title'>
      <h1>${data[i].judul}</h1>
    </div>
    <div class='image'>
      <img src=${data[i].primer['url-foto']} />
    </div>
    <div class='price'>
      <h3>Harga: Rp ${data[i].primer.harga},00</h3>
    </div>
    <div class='description'>`

  for (let j in data[i].deskripsi) {
    div.innerHTML += `
      <div class='description-detail'>
        <p><span>${parseKey(j)}:</span> ${data[i].deskripsi[j]}</p>
      </div>`    
  }

  div.innerHTML += `
    <form action='' method='post'>
      <input type='text' class='book-id' name='book-id' id='book-id' value=${data[i].primer['url-foto']} />
      <input name='add-cart' type='submit' class='add-cart-btn' value='Tambahkan ke Keranjang' />
    </form>
  </div>
  `

  return div
}

const params = window.location.search
const idx = params.substring(params.length - 1)

page.appendChild(generatePage(idx))