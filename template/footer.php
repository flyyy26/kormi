<div class="footer">
        <div class="footer_first">
            <div class="footer_identity">
                <img src="images/logo.png" alt="">
                <p>Nama domain 'www.kormikabupatenbogor.or.id' adalah milik KORMI Kabupaten Bogor, sebuah platform yang menyediakan panduan dan informasi untuk kegiatan olahraga, solidaritas sosial, dan kreativitas untuk masyarakat.</p>
                <div class="social_media_footer">
                    <a href="https://api.whatsapp.com/send?phone=6285121918149" target="blank_">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-whatsapp"></iconify-icon>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/kormikabupatenbogor/" target="blank_">
                        <div class="social_media_box">
                            <iconify-icon icon="basil:instagram-outline"></iconify-icon>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/groups/2631848220396609/" target="blank_">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-facebook"></iconify-icon>
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
                        <h5>Stadion Pakansari Gate 6, Pakansari</h5>
                        <p>Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16915</p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="mdi:envelope"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Email</h5>
                        <p>kormikabupatenbogor@gmail.com </p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="ic:baseline-phone"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Nomor Telepon</h5>
                        <p>+62 851 21918149</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script src="js/particle.js"></script> -->

    <script>
        var swiper = new Swiper(".eventSlide", {

            autoHeight: true,
            loop:true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // cssMode: true,
            // mousewheel: true,
            // keyboard: true,
            
        });
    </script>

    <script>
        var swiperBtn = new Swiper(".slideBtnStruktur", {
        spaceBetween: 10,
        // loop:true,
        slidesPerView: "auto",
        breakpoints: {
                640: {
                slidesPerView: "auto",
                spaceBetween: 10,
                },
                768: {
                slidesPerView: "auto",
                spaceBetween: 10,
                },
                1024: {
                slidesPerView: "auto",
                spaceBetween: 20,
                },
            },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
    </script>

    <script>
        var swiper = new Swiper(".about_home_image", {
            effect: "fade",
            loop:true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            }
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperCta", {
            effect: "fade",
            loop:true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            }
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperBanner", {
            effect: "fade",
            loop:true,
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
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
        var swiperInorga = new Swiper(".inorgaSlider", {
            slidesPerView: 4,
            spaceBetween: 10,
            autoplay:true,
            loop:true,
            breakpoints: {
                640: {
                slidesPerView: 4,
                spaceBetween: 10,
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 20,
                },
                1024: {
                slidesPerView: 6,
                spaceBetween: 5,
                },
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