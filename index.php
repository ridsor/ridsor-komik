<?php 
$data = file_get_contents('./json/komik.json');
$komiks = json_decode($data, true);
$komiks = $komiks['komik'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Komik</title>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./public/assets/css/config.css" />
    <link rel="stylesheet" href="./public/assets/css/header.css" />
    <link rel="stylesheet" href="./public/assets/css/main.css" />
    <link rel="stylesheet" href="./public/assets/css/footer.css" />
    <link rel="stylesheet" href="./public/assets/css/aside.css" />
  </head>
  <body>
    <header>
      <nav>
        <div class="responsive">
          <input type="checkbox" id="hamburger" hidden />
          <div class="container">
            <button>
              <label for="hamburger">
                <i class="bi bi-list hamburger"></i>
              </label>
            </button>
            <div class="search-bar">
              <input type="text" class="input" placeholder="Search..." />
              <button class="search"><i class="bi bi-search"></i></button>
            </div>
          </div>
          <div class="list">
            <div class="title">RIDSOR</div>
            <ul class="navbar">
              <li>
                <button><i class="bi bi-person-fill"></i></button>
              </li>
              <li><a href="">Beranda</a></li>
              <li><a href="">Komik Berwarna</a></li>
              <li><a href="">Komik Hot</a></li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="title">RIDSOR</div>
          <ul class="navbar">
            <li><a href="">Beranda</a></li>
            <li><a href="">Komik Berwarna</a></li>
            <li><a href="">Komik Hot</a></li>
          </ul>
          <form action="" class="container-button">
            <ul class="button">
              <li>
                <button><i class="bi bi-person-fill"></i></button>
              </li>
              <li>
                <button><i class="bi bi-search"></i></button>
              </li>
            </ul>
          </form>
        </div>
        <div class="filter-bar">
          <div class="filter-link"><a href="">Komik Terbaru</a></div>
          <div class="filter-link"><a href="">Daftar Komik</a></div>
          <div class="filter-link"><a href="">Manhua (Komik China)</a></div>
          <div class="filter-link"><a href="">Manhwa (Komik Korea)</a></div>
          <div class="filter-link"><a href="">Boruto</a></div>
          <div class="filter-link"><a href="">One Piece</a></div>
        </div>
      </nav>
    </header>
    <main>
      <div class="content">
        <section class="headhome">
          <article>
            <h1 class="title">Komik - Komik Terbaru</h1>
            <p class="informasi">
              Kamu sedang berada dihalaman khusus update chapter komik terbaru. Tentunya semua sudah diterjemahkan kedalam bahasa Indonesia. Kami juga memiliki semua judul-judul komik yang rilis di tahun ini dalam berbagai genre. Seperti
              komik berwarna, dan untuk manga yang terkenal yang sedang hype kami memberikan tanda HOT. Hanya di KomikIndo situs baca manga online terlengkap dan terupdate!
            </p>
          </article>
        </section>
        <section class="list-komik">
          <article>
            <h2 class="title">Update Chapter Komik Terbaru</h2>
            <div class="container">
              <?php foreach($komiks as $komik) : ?>
              <div class="komik-post">
                <div class="image">
                  <img src="<?= $komik['image'] ?>" alt="" />
                  <?php if($komik['warna']) : ?>
                  <div class="berwarna"><i class="bi bi-palette-fill"></i> WARNA</div>
                  <?php endif; ?>
                  <?php if($komik['type-komik'] == 'manga'): ?>
                  <span class="type-komik"><img src="./public/assets/img/bendera/japan.svg" alt="" /></span>
                  <?php elseif($komik['type-komik'] == 'manhwa'): ?>
                  <span class="type-komik"><img src="./public/assets/img/bendera/korsel.svg" alt="" /></span>
                  <?php elseif($komik['type-komik'] == 'manhua'): ?>
                  <span class="type-komik"><img src="./public/assets/img/bendera/china.svg" alt="" /></span>
                  <?php endif; ?>
                </div>
                <h4 class="title"><a href=""><?= $komik['judul'] ?></a></h4>
                <div class="info-chapter">
                  <a href="" class="chapter">Ch. <?= $komik['chapters'] ?></a>
                  <span class="datech" data-datech="<?= $komik['datech'] ?>"></span>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </article>
        </section>
      </div>
      <aside></aside>
    </main>
    <footer></footer>
    <script src="./public/assets/js/script.js"></script>
  </body>
</html>
