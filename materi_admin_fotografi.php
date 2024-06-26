<!--HALAMAN WEB TECHTREE: MATERI VIDEO-->
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8"> <!--Character encoding-->
    <!--Responsive design viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kelompok3_B"> <!-- Author of the webpage -->
    <link rel="stylesheet" href="materi_admin.css">
    <!-- Include FontAwesome from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Materi Kelas | Admin </title>
    <script src="kelasBootcamp.js" defer></script>
  </head>

  <body>
    <header>
      <!--LOGO-->
      <a id="logo_link" href="dashboard_admin.php">
          <img src="Logo.png" id="logo">
      </a>
      <!--MATERI YANG SEDANG DIPELAJARI-->
      <h3>Fotografi</h3>
      <h4 class="halaman_admin">Halaman Admin</h4>
      <!--Sees User Name-->
      <section class="profileAdjust">
        <img src="user.png">
        <p>Admin123</p>
      </section>
    </header>

    <!--Bagian utama halaman-->
    <main>
      <h1>Materi</h1>
      <!-- Materi 1 -->
      <section class="editable_nama_materi">
        <h2>#1 Photography Introduction</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <section class="editable_icon_video">
        <h2>Perbarui Link Video</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editVideoLink()"></i>
      </section>
      <iframe id="videoFrame" width="420" height="315"
        src="https://www.youtube.com/embed/ujaCbzLwuB8?si=1f2MdYCBdFZR5u4V" allowfullscreen frameborder="0">
    </iframe>

      <!-- Materi 2 -->
      <section class="editable_nama_materi">
        <h2>#2 Photography Basics</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <section class="editable_icon_video">
        <h2>Perbarui Link Video</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editVideoLink()"></i>
      </section>
      <iframe id="videoFrame" width="420" height="315"
        src="https://www.youtube.com/embed/5vu8ZVlSSqs?si=W3gm3iO9kKu861V2" allowfullscreen frameborder="0">
      </iframe>

      <!-- Materi 3 -->
      <section class="editable_nama_materi">
        <h2>#3 Camera Angles</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <section class="editable_icon_video">
        <h2>Perbarui Link Video</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editVideoLink()"></i>
      </section>
      <iframe id="videoFrame" width="420" height="315"
        src="https://www.youtube.com/embed/7fUi9sIu7rs?si=9Kb7j9oIZk0_QQN6" allowfullscreen frameborder="0">
      </iframe>

      <!-- Materi 4 -->
      <section class="editable_nama_materi">
        <h2>#4 Composition</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <section class="editable_icon_video">
        <h2>Perbarui Link Video</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editVideoLink()"></i>
      </section>
      <iframe id="videoFrame" width="420" height="315"
        src="https://www.youtube.com/embed/O6rby36Me_4?si=kgF8iwHiDYefX-eb" allowfullscreen frameborder="0">
      </iframe>

      <!-- Materi 5 -->
      <section class="editable_nama_materi">
        <h2>#5 Exposure Triangle</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul()"></i>
      </section>
      <section class="editable_icon_video">
        <h2>Perbarui Link Video</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editVideoLink()"></i>
      </section>
      <iframe id="videoFrame" width="420" height="315"
        src="https://www.youtube.com/embed/n0_EF9Empn4?si=ZmZIFbfc95OP4Bic" allowfullscreen frameborder="0">
      </iframe>

      <!--button goes to quiz-->
      <section class="mulaiQuiz">
        <button onclick="redirectToPage('dashboard_admin.php')">
          <i class="fa-solid fa-chevron-left"></i>Kembali ke Dashboard</button>
        <button onclick="redirectToPage('quiz_fotografi_admin.php')">Edit Quiz
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </section>
    </main>
  </body>
</html>