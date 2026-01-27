<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kedai Barmud | Susu Murni Premium</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #fafafa;
  color: #333;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
  background: #5d4037;
  color: white;
}
.navbar nav a {
  margin-left: 20px;
  color: white;
  text-decoration: none;
  font-weight: 500;
}

/* Hero */
.hero {
  height: 80vh;
  background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
              url('https://images.unsplash.com/photo-1580910051074-7b7d8c8f44c2');
  background-size: cover;
  background-position: center;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 20px;
}

.hero button {
  margin-top: 20px;
  padding: 14px 30px;
  background: #25D366;
  border: none;
  border-radius: 30px;
  color: white;
  font-size: 16px;
  cursor: pointer;
}

.section {
  max-width: 1100px;
  margin: auto;
  padding: 60px 20px;
}

.produk {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 25px;
}

.card {
  background: white;
  padding: 25px;
  border-radius: 15px;
  text-align: center;
  box-shadow: 0 10px 25px rgba(0,0,0,.08);
  transition: transform .3s;
  width: 280px;
}

.card img {
  width: 100%;
  height: 170px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 15px;
}
.card:hover {
  transform: translateY(-8px);
}

.card button {
  margin-top: 15px;
  padding: 10px 20px;
  background: #5d4037;
  color: white;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

.wa-float {
  position: fixed;
  bottom: 25px;
  right: 25px;
  background: #25D366;
  color: white;
  font-size: 28px;
  width: 55px;
  height: 55px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  box-shadow: 0 8px 20px rgba(0,0,0,.3);
}


footer {
  background: #5d4037;
  color: white;
  text-align: center;
  padding: 3px;
}
  </style>
</head>
<body>

  <header class="navbar">
    <h1>Kedai Barmud</h1>
    <nav>
      <a href="#tentang">Tentang</a>
      <a href="#produk">Produk</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

  <section id="tentang" class="section">
    <h2>Tentang Kami</h2>
    <p>
     <strong>
         Kedai Barmud. Barmud sendiri adalah singkatan dari "Barokah Mudah", yaa karena kami ingin tidak hanya ingin sukses,kami juga ingin tempat ini memiliki keberkahan tentu untuk semua orang khususnya orang disekitar. Selain itu alasan mengapa kami  menyediakan menu hanya susu murni karena kami ingin menyediakan kumpulan atau tempat berkumpul yang baik dan sehat.
      Maka dari itu pihak kami hanya menyediakan menu susu murni dengan berbagai macam rasa yang tentunya selain enak juga menyehatkan tubuh.
     </strong>
    </p>
  </section>

  <section id="produk" class="section">
    <h2>Menu Kami</h2>
    <div class="produk">
      <div class="card">
        <h3>Susu Original</h3>
        <img src="{{ asset('images/ori.jpeg') }}" alt="">
        <p>Rp 10.000</p>
        <button onclick="pesanWhatsApp('Susu Original')">Pesan</button>
      </div>
      <div class="card">
        <h3>Susu Cokelat</h3>
        <img src="{{ asset('images/coklat.jpeg') }}" alt="">
        <p>Rp 14.000</p>
        <button onclick="pesanWhatsApp('Susu Cokelat')">Pesan</button>
      </div>
      <div class="card">
        <h3>Susu Stroberi</h3>
        <img src="{{ asset('images/stroberi.jpeg') }}" alt="">
        <p>Rp 14.000</p>
        <button onclick="pesanWhatsApp('Susu Stroberi')">Pesan</button>
      </div>
      <div class="card">
        <h3>Susu Vanilla</h3>
        <img src="{{ asset('images/vanila.jpeg') }}" alt="">
        <p>Rp 14.000</p>
        <button onclick="pesanWhatsApp('Susu Vanilla')">Pesan</button>
      </div>
      <div class="card">
        <h3>Susu Melon</h3>
        <img src="{{ asset('images/melonn.jpeg') }}" alt="l">
        <p>Rp 14.000</p>
        <button onclick="pesanWhatsApp('Susu Melon')">Pesan</button>
      </div>
    </div>
  </section>

  

  <section id="kontak" class="section">
    <h2>Kontak</h2>
    <p>📍 Jl. Cilengkrang II</p>
    <p>📞 08987489968</p>
  </section>

  
  <a class="wa-float" onclick="pesanWhatsApp()">
    💬
  </a>

  <footer>
    <p>Thanks for comming to Kedai Barmud</p>
    <p>see you later</p>
  </footer>

  <script src="script.js"></script>
  <script>
    function pesanWhatsApp(produk = "") {
  const nomor = "08987489968";
  let pesan = "Halo Kedai Barmud, saya ingin memesan";

  if (produk) {
    pesan += " " + produk;
  } 

  const url = `https://wa.me/${nomor}?text=${encodeURIComponent(pesan)}`;
  window.open(url, "_blank");
}

  </script>
</body>
</html>
