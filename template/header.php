<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KORMI KAB. BOGOR</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="images/logo.png" alt="KORMI KABUPATEN BOGOR WEBSITE">
        </div>
        <button class="hamburger" onclick="popupMenuMobile()"><iconify-icon icon="ion:menu-outline"></iconify-icon></button>
        <nav id="menuMobilePopup">
            <button class="close_btn" onclick="popupMenuMobile()"><iconify-icon icon="ic:round-close"></iconify-icon></button>
            <div class="logo_mobile">
                <img src="images/logo.png" alt="">
            </div>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li class="has-submenu">
                    <a href="#" class="submenu-toggle">Tentang Kami <iconify-icon icon="fluent:chevron-down-32-filled"></iconify-icon></a>
                    <ul class="submenu">
                        <li><a href="tentang-kormi.php">Tentang KORMI</a></li>
                        <li><a href="organisasi.php">Struktur Organisasi</a></li>
                        <li><a href="visi-misi.php">Visi Misi KORMI Kab. Bogor</a></li>
                        <li><a href="program-kerja.php">Program Kerja</a></li>
                    </ul>
                </li>
                <li><a href="berita.php">Berita & Artikel</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
            <div class="btn_header btn_header_mobile">
                <a href="https://caleg.prahwa.net/form-pendaftaran"><button>Login</button></a>
            </div>
        </nav>
        <div class="btn_header">
            <a href="https://caleg.prahwa.net/form-pendaftaran"><button>Login</button></a>
        </div>
    </div>