<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savior Profile</title>
</head>
<body>
    <header>
        <section class="navbar">
        <nav class="nav-list">
            <ul>
                <li><a href="javascript:;" onclick="darkMode();"><i class="fa-regular fa-moon"></i></a></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <h1 class="Lalezar">Savior</h1>
    </section>

    <section id="home">
        <div class="greet">
            <div class="greet-container">
                <div class="greet-head">
                    <h1>Halo. Saya Savior!</h1>
                </div>
            </div>
            <div class="greet-p">
                <p>Perkenalkan, saya Savior tinggal di Tareran , hobi saya  nonton anime, main game, dan tidur. Saya sekarang berkuliah di Universitas Sam Ratulangi dan Jurusan Teknik Elektro Program Studi Informatika</p>
            </div>
        </div>
        <div class="title-img">
            <img src="assets/images/Group 30.png" alt="fotosav" width="400">
        </div>
    </section>
    </header>

    <main>
        <section id="gallery">
            <div class="gallerytext Lalezar">
                <h1>Gallery</h1>
            </div>
            
            <div class="img-container">
                <div class="img-child">
                    <img src="assets/images/black-clover.png" alt="asta" width="250">
                    <img src="assets/images/B110510-Cover.jpg" alt="Haikyuu" width ="250">
                </div>

                <div class="img-child-center">
                    <img src="assets/images/60a58134ad919d369968c24f.png" alt="rimuru" width="250">
                </div>

                <div class="img-child">
                    <img src="assets/images/c9abc84ad7dff882a907f8a5e9618f30.jpg" alt="Tokyo Ghoul" width="250">
                    <img src="assets/images/6cf6a05cb46971a21b687c63317a2cab.jpg" alt="Solo leveling" width="250">
                </div>
            </div>
        </section>

        <section id="blog">
            <div class="blogtext Lalezar">
                <h1>Blog</h1>
            </div>

            <div class="blog-break"></div>
            
            <div class="blog-container">
                <article>
                    <h2 class="Lalezar"><?php echo $judul1; ?></h2>
                    <p><?php echo $desk1; ?></p>
                    <a href="<?php echo $link1; ?>">Baca selengkapnya</a>
                </article>
                <article>
                    <h2 class="Lalezar"><?php echo $judul2; ?></h2>
                    <p><?php echo $desk2; ?></p>
                    <a href="<?php echo $link2; ?>">Baca selengkapnya</a>
                </article>
                <article>
                    <h2 class="Lalezar"><?php echo $judul3; ?></h2>
                    <p><?php echo $desk3; ?></p>
                    <a href="<?php echo $link3; ?>">Baca selengkapnya</a>
                </article>
            </div>

            <div class="blog-break"></div>
        </section>

        <section id="contact">
            <h1><u>Contact</u></h1>

            <div class="contact-container">
                <div class="contact-child">
                    <i class="fa-brands fa-discord"></i>
                    <br>
                    <a>Svvv</a>
                </div>
                <div class="contact-child">
                    <i class="fa-brands fa-instagram"></i>
                    <br>
                    <a href="https://www.instagram.com/saviorpdng_/">@saviorpdng_</a>
                </div>
                <div class="contact-child">
                    <i class="fa-brands fa-twitter"></i>
                    <br>
                    <a href="https://twitter.com/notkillxy">@notkillxy</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Footer -->
    </footer>
    <script src="assets/js/script.js"></script>
</body>
</html>