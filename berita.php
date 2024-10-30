<?php include 'template/header.php' ?>

<div class="banner_page">
    <img src="images/banner_page.png" alt="" class="bg_banner">
    <div class="slide_banner">
        <div class="swiper swiperBanner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner_img">
                        <div class="banner_img_overlay"></div>
                        <img src="images/slide_banner_1.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner_img">
                        <div class="banner_img_overlay"></div>
                        <img src="images/slide_banner_2.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner_img">
                        <div class="banner_img_overlay"></div>
                        <img src="images/slide_banner_3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content_banner">
        <h1 class="heading_page">BERITA & ARTIKEL</h1>
        <h3>KORMI KABUPATEN BOGOR</h3>
    </div>
</div>
<div class="artikel_section">
    <div class="search_artikel_mobile">
        <div class="artikel_section_sidebar_box">
            <div class="search_sidebar">
                <input type="text" placeholder="Cari Berita">
                <iconify-icon icon="ic:round-search"></iconify-icon>
            </div>
        </div>
    </div>
    <div class="artikel_section_list_container">
        <div class="artikel_section_list">
            <!-- foreach disini -->
            <div class="artikel_section_box">
                <div class="artikel_section_image">
                    <a href="blog_detail.php">
                        <img src="images/galeri_1.png" alt="">
                    </a>
                </div>
                <div class="artikel_section_content">
                    <a href="blog_detail.php">
                        <h1>Pentingnya Bantuan Kemanusiaan dalam Menghadapi Krisis Global</h1>
                    </a>
                    <span><iconify-icon icon="healthicons:calendar"></iconify-icon> September 28, 2024</span>
                </div>
            </div>
            <!-- foreach disini -->
        </div>
    </div>
    <div class="artikel_section_sidebar">
        <div class="artikel_section_sidebar_container">
            <div class="artikel_section_sidebar_box artikel_section_sidebar_box_dekstop">
                <h3>Cari di Kormi Kab. Bogor</h3>
                <div class="search_sidebar">
                    <input type="text" placeholder="Cari Berita">
                    <iconify-icon icon="ic:round-search"></iconify-icon>
                </div>
            </div>
            <div class="artikel_section_sidebar_box">
                <h3>Berita Terbaru</h3>
                <div class="artikel_section_recent">
                    <ul>
                        <li>
                            <a href="">
                                <iconify-icon icon="mage:chevron-right-circle-fill"></iconify-icon>
                                Kemanusiaan sebagai Pilar Kehidupan yang Lebih Baik
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <iconify-icon icon="mage:chevron-right-circle-fill"></iconify-icon>
                                Mengapa AVI Humanity Hadir untuk Memberdayakan Masyarakat
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <iconify-icon icon="mage:chevron-right-circle-fill"></iconify-icon>
                                Mengapa AVI Humanity Hadir untuk Memberdayakan Masyarakat
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <iconify-icon icon="mage:chevron-right-circle-fill"></iconify-icon>
                                Mengapa AVI Humanity Hadir untuk Memberdayakan Masyarakat
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <iconify-icon icon="mage:chevron-right-circle-fill"></iconify-icon>
                                Mengapa AVI Humanity Hadir untuk Memberdayakan Masyarakat
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <iconify-icon icon="mage:chevron-right-circle-fill"></iconify-icon>
                                Mengapa AVI Humanity Hadir untuk Memberdayakan Masyarakat
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>