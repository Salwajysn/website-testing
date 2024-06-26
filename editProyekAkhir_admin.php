
<!--HALAMAN WEB TECHTREE: EDIT DETAIL PROYEK AKHIR-->
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8"> <!--Character encoding-->
    <!--Responsive design viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kelompok3_B"> <!-- Author of the webpage -->
    <link rel="stylesheet" href="editProyekAkhir.css">
    <!-- Include FontAwesome from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Proyek Akhir | Admin </title>
    <script src="proyekAkhir.js" defer></script>
  </head>

  <body>
    <header>
      <!--LOGO-->
      <a id="logo_link" href="dashboard_admin.php">
          <img src="Logo.png" id="logo">
      </a>
      <!--MATERI YANG SEDANG DIPELAJARI-->
      <h3>Desain UI/UX - Proyek Akhir</h3>
      <h4 class="halaman_admin">Halaman Admin</h4>
      <!--Sees User Name-->
      <section class="profileAdjust">
        <img src="user.png">
        <p>Admin123</p>
      </section>
    </header>

    <!--Bagian utama halaman-->
    <main>
      <h1>Proyek Akhir</h1>
      <!--judul proyek akhir-->
      <section class="editable_nama_materi">
        <h2>Design Aplikasi Mobile E-Commerce Niche untuk Fashion Sustainable</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <!--deskripsi produk-->
      <section class="editable_icon_video">
        <h2>Deskripsi Proyek</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editSection(this)"></i>
      </section>
      <p class="paragraf">Di dunia e-commerce, niche atau ceruk pasar merujuk pada segmen khusus dalam pasar yang lebih luas. Ini melayani audiens tertentu dengan 
        kebutuhan dan preferensi yang unik. Bisnis e-commerce niche berfokus menawarkan produk yang lebih spesifik dibandingkan dengan retailer 
        online yang umum. E-commerce Niche berfokus pada target audiens tertentu dengan minat atau kebutuhan khusus. Misalnya, berspesialisasi 
        dalam industri pakaian berkelanjutan. Aplikasi mobile e-commerce niche yang berfokus pada penjualan produk fashion berkelanjutan, dapat 
        membantu konsumen yang peduli lingkungan untuk menemukan dan membeli pakaian, aksesoris, dan produk fashion lainnya yang ramah 
        lingkungan dan etis. Aplikasi ini akan menampilkan berbagai merk dan desainer yang memprioritaskan praktik berkelanjutan dalam produksi 
        dan bahan mereka.
      </p>
      <!--gambaran umum dan tujuan-->
      <section class="editable_icon_video">
        <h2>Gambaran Umum dan Tujuan Proyek</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editSection(this)"></i>
      </section>
      <p class="paragraf">
        Fitur Utama:
        - Pencarian dan browsing produk berdasarkan kategori, merek, bahan, dan kriteria keberlanjutan lainnya.
        - Rekomendasi produk yang dipersonalisasi berdasarkan preferensi dan gaya pengguna.
        - Informasi detail produk yang mencakup deskripsi, bahan, praktik keberlanjutan, dan ulasan pelanggan.
        - Keranjang belanja dan proses checkout yang mudah digunakan.
        - Pelacakan pesanan dan pemberitahuan pengiriman.
        - Blog dan konten edukasi tentang fashion berkelanjutan.

        Desain:
        Antarmuka yang intuitif dan ramah pengguna dengan estetika modern dan minimalis. Penggunaan warna dan gambar yang mencerminkan nilai-nilai keberlanjutan serta tata letak yang jelas dan mudah dinavigasi.

        Tujuan Proyek:
        - Meningkatkan kesadaran tentang fashion berkelanjutan
        - Menyediakan platform yang mudah digunakan dan nyaman bagi konsumen untuk menemukan dan membeli produk fashion berkelanjutan.
      </p>
      <!--hasil akhir produk-->
      <section class="editable_icon_video">
        <h2>Hasil Akhir yang Diharapkan</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editSection(this)"></i>
      </section>
      <p class="paragraf">Hasil akhir proyek yang diharapkan berupa: 

        Laporan proyek akhir yang mencakup proses pengembangan desain menggunakan metode Design Thinking
        Tautan Desain Figma
        Video demo prototype desain
      </p>
      <p class="paragraf paragrafNone">Gabung seluruh file menjadi satu dalam tautan <span class="googleDrive">google drive</span>.</p>

      <!--button goes to dashboard-->
      <section class="backToDashboard">
        <button onclick="redirectToPage('dashboard_admin.php')">
          <i class="fa-solid fa-chevron-left"></i>Kembali ke Dashboard</button>
      </section>
    </main>
  </body>
</html>