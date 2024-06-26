<?php
// Include file koneksi database
include 'db_connect.php';

// Tangkap input dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link_google_drive = $_POST['project_submit'];

    // Prepared statement untuk memasukkan data ke database
    $stmt = $conn->prepare("INSERT INTO submission (link_google_drive) VALUES (?)");
    $stmt->bind_param("s", $link_google_drive);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Proyek berhasil disubmit.";
    } else {
        echo "Gagal menyimpan proyek: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>

<!--HALAMAN WEB TECHTREE: DETAIL DAN SUBMIT PROYEK AKHIR-->
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8"> <!--Character encoding-->
    <!--Responsive design viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kelompok3_B"> <!-- Author of the webpage -->
    <link rel="stylesheet" href="detail_dan_submit_proyekAkhir.css">
    <!-- Include FontAwesome from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Proyek Akhir</title>
    <script src="proyekAkhir.js" defer></script>
    <script src="update_user_page.js"></script>
  </head>

  <body>
    <header>
      <!--LOGO-->
      <a id="logo_link" href="dashboard.php">
          <img src="Logo.png" id="logo">
      </a>
      <!--PROYEK AKHIR-->
      <h3>Desain UI/UX - Proyek Akhir</h3>
      <!--Sees User Name-->
      <section class="profileAdjust">
        <img src="user.png">
        <p>user0767</p>
      </section>
    </header>

    <!--Bagian utama halaman-->
    <main>
      <h1>Proyek Akhir</h1>
      <!--judul proyek akhir-->
      <h2 class="judulProyek">Design Aplikasi Mobile E-Commerce Niche untuk Fashion Sustainable</h2>
      <!--deskripsi proyek-->
      <h2 class="subTitle_proyek">Deskripsi Proyek</h2>
      <p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in egestas leo, at ornare sem. Suspendisse ac magna nec neque lacinia malesuada ut 
        consequat lectus. Morbi tortor orci, fermentum non accumsan faucibus, rutrum vitae lacus. Phasellus rhoncus est ac commodo aliquam. Ut vestibulum odio at 
        sapien rhoncus tincidunt. Aliquam erat volutpat. In eget pharetra odio. Nulla bibendum orci vitae pretium laoreet. Suspendisse a lorem ligula.
        
        Maecenas eu pharetra erat, quis gravida odio. Suspendisse volutpat tortor eget fermentum convallis. In nec rhoncus tellus, at vehicula massa. Sed quis commodo 
        ante. Ut ultrices urna purus, ut pulvinar felis consectetur eget. Donec ipsum odio, porttitor id consequat sed, tempus a tellus. Donec sagittis aliquam elit eu 
        convallis. Mauris quis tellus sed sem tincidunt accumsan. Maecenas nulla sem, convallis facilisis cursus vitae, varius at tellus. Interdum et malesuada fames ac 
        ante ipsum primis in faucibus. Sed sed mi viverra nulla rutrum tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis 
        egestas. Praesent metus tellus, rhoncus ac nisl pharetra, iaculis feugiat lacus.
        </p>

      <!--gambaran umum dan tujuan-->
      <h2 class="subTitle_proyek">Gambaran Umum dan Tujuan Proyek</h2>
      <p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in egestas leo, at ornare sem. Suspendisse ac magna nec neque lacinia malesuada ut 
        consequat lectus. Morbi tortor orci, fermentum non accumsan faucibus, rutrum vitae lacus. Phasellus rhoncus est ac commodo aliquam. Ut vestibulum odio at 
        sapien rhoncus tincidunt. Aliquam erat volutpat. In eget pharetra odio. Nulla bibendum orci vitae pretium laoreet. Suspendisse a lorem ligula.

        Maecenas eu pharetra erat, quis gravida odio. Suspendisse volutpat tortor eget fermentum convallis. In nec rhoncus tellus, at vehicula massa. Sed quis commodo 
        ante. Ut ultrices urna purus, ut pulvinar felis consectetur eget. Donec ipsum odio, porttitor id consequat sed, tempus a tellus. Donec sagittis aliquam elit eu 
        convallis. Mauris quis tellus sed sem tincidunt accumsan. Maecenas nulla sem, convallis facilisis cursus vitae, varius at tellus. Interdum et malesuada fames ac 
        ante ipsum primis in faucibus. Sed sed mi viverra nulla rutrum tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis 
        egestas. Praesent metus tellus, rhoncus ac nisl pharetra, iaculis feugiat lacus.
        
        Vestibulum scelerisque rutrum turpis, sit amet consequat sapien laoreet id. Donec sit amet nulla quis turpis sodales accumsan vitae non dolor. Etiam arcu massa, 
        sagittis sit amet placerat vitae, sollicitudin vel arcu. Donec semper egestas neque nec ultrices. Integer ac ullamcorper arcu. Interdum et malesuada fames ac 
        ante ipsum primis in faucibus. Suspendisse egestas urna orci, quis porta orci venenatis at. Ut a consequat dui. Phasellus ac eros ut ipsum eleifend pellentesque. 
        Mauris laoreet auctor augue. Phasellus in sem rutrum lorem convallis vulputate sed sed arcu. Cras magna purus, semper quis metus ac, hendrerit egestas libero. 
        Vivamus blandit mi arcu, eu semper urna fringilla non. Cras in volutpat quam.</p>

      <!--hasil akhir produk-->
      <h2 class="subTitle_proyek">Hasil Akhir yang Diharapkan</h2>
      <p class="paragraf">Hasil akhir proyek yang diharapkan berupa: 

        Laporan proyek akhir yang mencakup proses pengembangan desain menggunakan metode Design Thinking
        Tautan Desain Figma
        Video demo prototype desain
      </p>
      <p class="paragraf paragrafNone">Gabung seluruh file menjadi satu dalam tautan <span class="googleDrive">google drive</span>.</p>

      <!--form pengumpulan proyek-->
        <h2 class="subTitle_proyek">Submit Proyek</h2>
        <form action="submit_project.php" method="post">
        <input id="project_submit" type="url" name="project_submit" placeholder="Masukkan Link Google Drive" required>
        <input type="submit">
        </form>

      <!--button goes to dashboard-->
      <section class="backToDashboard">
        <button onclick="redirectToPage('dashboard.php')">
          <i class="fa-solid fa-chevron-left"></i>Kembali ke Dashboard</button>
      </section>
    </main>
  </body>
</html>