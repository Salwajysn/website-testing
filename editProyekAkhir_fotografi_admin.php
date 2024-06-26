

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
      <h3>Fotografi - Proyek Akhir</h3>
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
        <h2>Portraiture through Cultural Lens</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <!--deskripsi produk-->
      <section class="editable_icon_video">
        <h2>Deskripsi Proyek</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editSection(this)"></i>
      </section>
      <p class="paragraf">
        Peserta akan mengembangkan kemampuan fotografi potret mereka dengan fokus pada lensa budaya. Mereka akan diminta untuk menangkap 
        esensi kehidupan sehari-hari, ekspresi wajah, dan cerita melalui fotografi potret yang menggambarkan keanekaragaman budaya di sekitar 
        mereka. Tugas ini menggabungkan teknik fotografi potret, penggunaan cahaya, komposisi, serta kemampuan untuk membangun hubungan 
        dengan subjek foto.
      </p>
      <!--gambaran umum dan tujuan-->
      <section class="editable_icon_video">
        <h2>Gambaran Umum dan Tujuan Proyek</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editSection(this)"></i>
      </section>
      <p class="paragraf">
        Fitur Utama:
        - Fokus pada budaya
        - Narasi visual yang kuat dalam menghubungkan tiap foto

        Tujuan Proyek:
        - Memberikan pengalaman mendalam dalam fotografi potret dengan sudut pandang budaya yang kuat
        - Memahami bagaimana latar belakang budaya seseorang dapat mempengaruhi ekspresi dan identitas
        - Belajar menceritakan cerita melalui foto
        - Mengasah keterampilan dalam berinteraksi dengan subjek foto dari latar belakang budaya yang berbeda
      </p>
      <!--hasil akhir produk-->
      <section class="editable_icon_video">
        <h2>Hasil Akhir yang Diharapkan</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editSection(this)"></i>
      </section>
      <p class="paragraf">Hasil akhir proyek yang diharapkan berupa: 
        Portofolio digital
        Video presentasi
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