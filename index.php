<?php date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['pesan'])) {
  $fp = fopen('p.txt', 'a');
  fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />' . $_POST['pesan'] . '</p><h6>' . date("d-M-Y (H:i)") . '</h6></div>');
  echo json_encode(array("s" => 200));
  fclose($fp);
  die;
}
if (isset($_POST['d'])) {
  $fa = fopen('p.txt', 'a');
  fwrite($fa, $_POST['d']);
  echo json_encode(array("s" => 200));
  fclose($fa);
  die;
}
if (isset($_GET['d'])) {
  $fa = fopen('p.txt', 'a');
  fclose($fa);
  $fr = fopen('p.txt', 'r');
  echo json_encode(array("d" => fgets($fr)));
  fclose($fr);
  die;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Happy Birthday Agress</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://dekatutorial.github.io/crd/s.js"></script>
  <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" />
</head>

<body> <?php if (isset($_GET['pesan'])) {
          echo "<div id='ccp'>";
          $fp = fopen('p.txt', 'r');
          fgets($fp);
          while (!feof($fp)) {
            echo "" . fgets($fp);
          }
          fclose($fp);
          echo "</div></body></html>";
          die;
        } ?> <script>
    dt()
  </script>
  <div class="ctnr">
    <div class="lv">
      <img src="https://dekatutorial.github.io/crd/lv.svg" />
      <p>Klik Love-nya dong sayangg</p>
    </div>
    <div class="ctn">
      <button class="btn next">[ Lanjut ]</button>
      <button class="btn send">[ Kirim Pesan ]</button>
    </div>
  </div>
  <script>

    konten = [{
        gambar: "g1.jpeg",
        ucapan: "Selamat Ulang Tahun Agress",
      },
      { 
        gambar: "g3.jpeg",
        ucapan: "20 tahun sudah kamu hidup di dunia ini, dan akhirnya bisa ketemu sama aku yang paling baik, ganteng, dan sabar ini",
      },
      {
        gambar: "g2.jpeg",
        ucapan: "Semoga panjang umur, sehat selalu, dan bahagia selalu yaa Agress, Sayanggg",
      },
      {
        gambar: "g5.jpeg",
        ucapan: "Aku sangat bersyukur bisa kenal kamu, Agress",
      },
      {
        gambar: "g4.jpeg",
        ucapan: "Manusia paling baikk, cantikkk, imutt, dan lucu yang pernah aku kenal",
      },
      {
        gambar: "g6.jpeg",
        ucapan: "Manusia itu tidak ada yang sempurna, tapi kamu itu sempurna di mataku",
      },
      {
        gambar: "g7.jpeg",
        ucapan: "Kamu tuh nda asik kalo insecure, karena kamu itu cantik, imut, dan baik",
      },
      {
        gambar: "g10.jpeg",
        ucapan: "Aku sayang, Agress. aku sayang sayang sayanggg bangettt",
      },
      {
        gambar: "g9.jpeg",
        ucapan: "kamu itu ciptaan Tuhan yang paling cuanntik, imut, lucu, dan baik",
      },
      {
        ucapan: "Aku sayang bangett sama kamu, i love your ego, i love your smile, i love your laugh, i love your face, i love your everything",
      },

      //penutup
      {
        gambar: "g8.jpeg",
        ucapan: "Sehatt selalu yaa partner beda agama kuuu",
      },
      {
        ucapan: "I wish you all the best, Gegess sayangggg",
      },
      {
        gambar: "g11.jpeg",
        ucapan: "Aku berharap kita bisa bersama terus meskipun ada banyak rintangan yang harus kita hadapi. Kalo semua rintangan itu bisa kita hadapi, aku yakin kita akan bahagia bersama",
      },
      {
        gambar: "g12.jpeg",
        ucapan: "I love you, Ti amo, Aishiteru, Wo ai ni, Je t'aime, Ich liebe dich, 사랑해요",
      },
      {
        ucapan: "Kalo nanti seandainya kita tidak bersama, aku tetep akan selalu sayang sama kamu, dan aku akan selalu mendoakan yang terbaik untukmu. mendapatkan yang terbaik dari pada aku, yang pasti seagama", 
      },
      {
       ucapan: "I LOVEEE YOUUUU, SAYANGGGGG", 
      },
    
    ];

    musik = "musik.mp3";
    nomorWhatsapp = "6282272027320";

    /*=========================*/
  </script>
  <script>
    DekaTutorial(konten, musik, nomorWhatsapp);
  </script>
</body>

</html>