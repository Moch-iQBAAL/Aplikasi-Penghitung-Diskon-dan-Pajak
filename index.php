<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Penghitung Diskon</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, rgb(156, 248, 27), rgb(8, 243, 255));
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    div.container {
        background: #fff;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(91, 84, 221, 0.2);
        max-width: 400px;
        width: 100%;
    }
    .identitas {
        text-align: center;
        margin-bottom: 20px;
    }
    .identitas p {
        font-size: 1.1em;
        color: rgb(0, 0, 0);
        font-weight: bold;
    }
    
  </style>
</head
<body>
  <div class="container">
    <div id="identitasSiswa" class="identitas">
      <p id="tampilNama">Nama: Rifqi Saputra</h2>
      <p id="tampilNis">Nisn: 2223100040</p>
    </div>

    <div class="form-container">
      <h2>Aplikasi Penghitung Diskon</h1>

      <div class="input-group">
        <label>Harga Awal (Rp)</label>
        <input type="text" id="hargaAwal" placeholder="Contoh: Rp.10000">
      </div>

      <div class="input-group">
        <label>Diskon (%)</label>
        <input type="text" id="diskon" placeholder="Contoh: 20%">
      </div>

      <button class="btn-calculate" onclick="hitungDiskon()">Hitung</button>

      <div id="hasil" class="hasil"></div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
