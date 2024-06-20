<!-- materi_admin.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Kelompok3_B">
  <link rel="stylesheet" href="materi_admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Materi Kelas | Admin</title>
  <script src="kelasBootcamp.js" defer></script>
  
  <!-- Include jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    // Function to handle editing materi judul
    function editMateriJudul(idMateri) {
      var newJudul = prompt("Masukkan judul baru:");
      if (newJudul != null) {
        // Send data to update_materi.php using Ajax
        $.ajax({
          type: 'POST',
          url: 'update_materi.php',
          data: { idMateri: idMateri, newJudul: newJudul },
          success: function(response) {
            alert(response); // Show success or error message
            location.reload(); // Reload the page after update
          }
        });
      }
    }

    // Function to handle editing video link
    function editVideoLink(idMateri) {
      var newLink = prompt("Masukkan link video baru:");
      if (newLink != null) {
        // Send data to update_materi.php using Ajax
        $.ajax({
          type: 'POST',
          url: 'update_materi.php',
          data: { idMateri: idMateri, newLink: newLink },
          success: function(response) {
            alert(response); // Show success or error message
            location.reload(); // Reload the page after update
          }
        });
      }
    }

    // Function to handle next materi navigation
    function nextMateri() {
      var currentPage = parseInt('<?php echo $_GET["page"] ?? 1; ?>');
      var nextPage = currentPage + 1;
      window.location.href = 'materi_admin.php?page=' + nextPage;
    }

    // Function to redirect to quiz page
    function redirectToQuiz() {
      window.location.href = 'quiz_admin.php';
    }
  </script>
</head>

<body>
  <header>
    <!--LOGO-->
    <a id="logo_link" href="dashboard_admin.php">
        <img src="Logo.png" id="logo">
    </a>
    <!--MATERI YANG SEDANG DIPELAJARI-->
    <h3>Desain UI/UX</h3>
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

    <!-- Materi sections -->
    <?php
    // Include db_connect.php to connect to database
    include 'db_connect.php';

    // Mengatur halaman default dan mengambil materi berdasarkan halaman
    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $offset = ($currentPage - 1) * 1; // Mengambil satu materi per halaman
    $query = "SELECT * FROM materi WHERE Id_Kelas = 'Kls01' LIMIT 1 OFFSET $offset";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $idMateri = $row['Id_Materi'];
      $namaMateri = $row['Nama_Materi'];
      $videoLink = $row['video_link'];
    ?>
      <section class="editable_nama_materi">
        <h2><?php echo $namaMateri; ?></h2>
        <i class="fa-solid fa-pen-to-square" onclick="editMateriJudul('<?php echo $idMateri; ?>')"></i>
      </section>
      <section class="editable_icon_video">
        <h2>Perbarui Link Video</h2>
        <i class="fa-solid fa-pen-to-square" onclick="editVideoLink('<?php echo $idMateri; ?>')"></i>
      </section>
      <iframe width="420" height="315" src="<?php echo $videoLink; ?>" allowfullscreen frameborder="0"></iframe>
    <?php
    } else {
      echo "Tidak ada materi yang tersedia.";
    }

    // Menampilkan tombol next jika masih ada materi berikutnya
    $nextPage = $currentPage + 1;
    $queryNext = "SELECT * FROM materi WHERE Id_Kelas = 'Kls01' LIMIT 1 OFFSET $nextPage";
    $resultNext = mysqli_query($conn, $queryNext);
    ?>
    <section class="mulaiQuiz">
      <button onclick="redirectToPage('dashboard_admin.php')">
        <i class="fa-solid fa-chevron-left"></i>Kembali ke Dashboard</button>
      <?php if (mysqli_num_rows($resultNext) > 0) { ?>
        <button onclick="nextMateri()">Next Materi
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      <?php } else { ?>
        <button onclick="redirectToQuiz()">Edit Quiz
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      <?php } ?>
    </section>

    <?php
    // Close database connection
    mysqli_close($conn);
    ?>
  </main>
</body>
</html>
