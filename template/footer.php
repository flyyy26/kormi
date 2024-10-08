<div class="footer">
        <div class="footer_first">
            <div class="footer_identity">
                <img src="images/logo.png" alt="">
                <p>Nama domain 'www.kormikabupatenbogor.or.id' adalah milik KORMI Kabupaten Bogor, sebuah platform yang menyediakan panduan dan informasi untuk kegiatan olahraga, solidaritas sosial, dan kreativitas untuk masyarakat.</p>
                <div class="social_media_footer">
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-whatsapp"></iconify-icon>
                        </div>
                    </a>
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="basil:instagram-outline"></iconify-icon>
                        </div>
                    </a>
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-facebook"></iconify-icon>
                        </div>
                    </a>
                    <a href="">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-tiktok"></iconify-icon>
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu_footer">
                <div class="menu_footer_box">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="">Tentang Kami</a></li>
                        <li><a href="">Organisasi</a></li>
                        <li><a href="https://caleg.prahwa.net/form-pendaftaran">Registrasi</a></li>
                    </ul>
                </div>
                <div class="menu_footer_box">
                    <h3>Bantuan</h3>
                    <ul>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Keluhan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_second">
            <ul>
                <li><a href="">Syarat Ketentuan</a></li>
                <li><a href="">Kebijakan Privasi</a></li>
                <li><a href="">Kebijakan Cookie</a></li>
            </ul>
            <span>©️ 2024 KORMI KAB. BOGOR | ID</span>
        </div>
        <div class="footer_third">
            <p><span>Disclaimer:</span> Kami tidak bertanggung jawab atas konten situs pihak ketiga. Verifikasi informasi dan konsultasikan dengan profesional sebelum mengambil keputusan.</p>
            <div class="company_data">
                <div class="company_data_box">
                    <iconify-icon icon="carbon:location-filled"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Jl. Pemuda, RT.04/RW.01, Tanah Sareal</h5>
                        <p>Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161</p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="mdi:envelope"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Email</h5>
                        <p>cs@kormikabupatenbogor.or.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/all@3.0.3/tsparticles.all.bundle.min.js"></script>
    <script src="js/particle.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "fade",
            loop:true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperGaleri", {
            loop:true,
            effect: "fade",
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperGaleriPage", {
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 30,
                },
                1024: {
                slidesPerView: 2,
                spaceBetween: 30,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
    </script>
    <script>
       document.addEventListener('DOMContentLoaded', function () {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');

            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Hapus kelas 'active' dari semua submenu kecuali yang diklik
                    submenuToggles.forEach(t => {
                        if (t !== this) {
                            t.classList.remove('active');
                        }
                    });
                    // Toggle kelas 'active' pada elemen yang diklik
                    this.classList.toggle('active');
                });
            });

            // Event listener untuk mendeteksi klik di luar submenu
            document.addEventListener('click', function (e) {
                // Jika klik terjadi di luar elemen dengan kelas 'submenu-toggle' dan submenu
                submenuToggles.forEach(toggle => {
                    const submenu = toggle.nextElementSibling;
                    if (submenu && !toggle.contains(e.target) && !submenu.contains(e.target)) {
                        toggle.classList.remove('active');
                    }
                });
            });

            document.addEventListener('scroll', function (e) {
                // Jika klik terjadi di luar elemen dengan kelas 'submenu-toggle' dan submenu
                submenuToggles.forEach(toggle => {
                    const submenu = toggle.nextElementSibling;
                    if (submenu && !toggle.contains(e.target) && !submenu.contains(e.target)) {
                        toggle.classList.remove('active');
                    }
                });
            });
        });

    </script>
    <script src="js/menu-mobile.js"></script>
</body>
</html>