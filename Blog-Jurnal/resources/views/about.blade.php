<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MY TEAM</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,900;1,100;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- icons-->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header>
      <nav>
        <a href="#">Blog</a>
        <a href="#">Book</a>
        <a href="#">Art</a>
      </nav>
    </header>

    <div class="slider">
      <div class="list">
        <div class="item">
          <img
            src="img\alexas_fotos-press-1015988_1920.jpg"
            alt="image 1"
          />
          <div class="detail">
            <div class="title">Story</div>
            <div class="name">
            <a href="" target="_blank">Suara Berita</a>
            </div>
            <figure>
              {{-- <div class="sosials">
                <a href="#" target="_blank"><i data-feather="instagram"></i></a>
                <a href="#" target="_blank"><i data-feather="linkedin"></i></a>
              </div> --}}
              <figcaption class="figure">08 / 03 / 2026</figcaption>
            </figure>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
              veniam.
            </div>
          </div>
        </div>
        <div class="item">
          <img
            src="img\pexels-hands-1838659_1920.jpg"
            alt="image 2"
          />
          <div class="detail">
            <div class="title">Story</div>
            <div class="name">Tunas Harapan</div>
            <figure>
              {{-- <div class="sosials">
                <a href="#" target="_blank">
                  <i data-feather="instagram"></i
                ></a>
                <a href="#" target="_blank"> <i data-feather="linkedin"></i></a>
              </div> --}}
              <figcaption>08 / 03 / 2026</figcaption>
            </figure>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
              veniam.
            </div>
          </div>
        </div>
        <div class="item">
          <img
            src="img\tommyvideo-ai-generated-8496132_1920.jpg"
            alt="image 3"
          />
          <div class="detail">
            <div class="title">Story</div>
            <div class="name">Era AI</div>
            <figure>
              {{-- <div class="sosials">
                <a href="#" target="_blank">
                  <i data-feather="instagram"></i
                ></a>
                <a href="#" target="_blank"> <i data-feather="linkedin"></i></a>
              </div> --}}
              <figcaption>08 / 03 / 2026</figcaption>
            </figure>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
              veniam.
            </div>
          </div>
        </div>
        <div class="item">
          <img
            src="img\hoganj-camel-train-3408458_1920.jpg"
            alt="image 4"
          />
          <div class="detail">
            <div class="title">Story</div>
            <div class="name">Sunyi Gurun</div>
            <figure>
              {{-- <div class="sosials">
                <a href="#" target="_blank">
                  <i data-feather="instagram"></i
                ></a>
                <a href="#" target="_blank"> <i data-feather="linkedin"></i></a>
              </div> --}}
              <figcaption>08 / 03 / 2026</figcaption>
            </figure>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
              veniam.
            </div>
          </div>
        </div>
        <div class="item">
          <img
            src="img\truongdinhanh-sun-9837351_1920.jpg"
            alt="image 5"
          />
          <div class="detail">
            <div class="title">Story</div>
            <div class="name">Nadi Pangan</div>
            <figure>
              {{-- <div class="sosials">
                <a href="#" target="_blank">
                  <i data-feather="instagram"></i
                ></a>
                <a href="#" target="_blank"> <i data-feather="linkedin"></i></a>
              </div> --}}
              <figcaption>08 / 03 / 2026</figcaption>
            </figure>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam,
              veniam.
            </div>
          </div>
        </div>
      </div>

      <div class="thumbnail">
        <div class="item">
          <img
            src="img\alexas_fotos-press-1015988_1920.jpg"
            alt="thumbnail 1"/>
          <div class="detail">
            <div class="name">Jurnalistik</div>
            <blockquote>"Salam Kenal"</blockquote>
          </div>
        </div>
        <div class="item">
          <img
            src="img\pexels-hands-1838659_1920.jpg"
            alt="thumbnail 2"/>
          <div class="detail">
            <div class="name">Alam</div>
            <blockquote>"Salam Santai"</blockquote>
          </div>
        </div>
        <div class="item">
          <img
            src="img\tommyvideo-ai-generated-8496132_1920.jpg"
            alt="thumbnail 3"/>
          <div class="detail">
            <div class="name">Teknologi</div>
            <blockquote>"Salam Suka"</blockquote>
          </div>
        </div>
        <div class="item">
          <img
            src="img\hoganj-camel-train-3408458_1920.jpg"
            alt="thumbnail 3"/>
          <div class="detail">
            <div class="name">Trevel</div>
            <blockquote>""</blockquote>
          </div>
        </div>
        <div class="item">
          <img
            src="img\truongdinhanh-sun-9837351_1920.jpg"
            alt="thumbnail 5"/>
          <div class="detail">
            <div class="name">Agrikultur</div>
            <blockquote>"Salam Suka"</blockquote>
          </div>
        </div>
      </div>

      <div class="arrows">
        <button id="prev">&lt;</button>
        <button id="next">&gt;</button>
      </div>

      <div class="loading-bar"></div>
    </div>

    <!-- BLOG -->
    <section id="blog" class="blog-section">
      <div class="container">
        <div class="blog-header">
          <h4 class="blog-subtitle">Story</h4>
          <h2 class="blog-title">Update</h2>
          <p class="blog-desc">
            Catatan kecil tentang pengalaman, pemikiran, dan perjalanan hidup yang terus berjalan.
          </p>
        </div>

        <div class="blog-grid">
          <!-- CARD 1 -->
          <div class="blog-card">
            <img src="img\izafi-poverty-9852785_1920.png" alt="berita1" />
            <div class="blog-content">
              <h3>
                <a
                  href=""
                  target="_blank"
                >
                  Meromantisasi Kemiskinan?
                </a>
              </h3>
              <p>
                Mereka menyebutnya meromantisasi kemiskinan.
                Padahal mungkin itu hanya cerita tentang seseorang yang masih bertahan, 
                sambil terus mencari cara untuk keluar.
              </p>
              <a
                class="btn"
                href=""
                target="_blank"
              >
                Baca Selengkapnya
              </a>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="blog-card">
            <img src="img\congerdesign-family-4937226_1920.jpg" alt="berita2" />
            <div class="blog-content">
              <h3>
                <a
                  href=""
                  target="_blank"
                >
                  Rumah Tanpa Jalan Pulang
                </a>
              </h3>
              <p>
                Ada rumah yang masih hidup di ingatan, tapi entah sejak kapan jalan untuk 
                kembali ke sana perlahan hilang. Dan kita hanya bisa berdiri jauh, memanggil sesuatu yang tak lagi tahu arah pulang.
              </p>
              <a
                class="btn"
                href=""
                target="_blank"
              >
                Baca Selengkapnya
              </a>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="blog-card">
            <img
              src="img\sunriseforever-boys-3396713_1920.jpg"
              alt="berita3"
            />
            <div class="blog-content">
              <h3>
                <a
                  href=""
                  target="_blank"
                >
                  Imajinasi Kecil
                </a>
              </h3>
              <p>
               Dulu langit bisa berubah jadi lautan, dan ranting kayu cukup untuk menjadi pedang petualangan. Kini banyak anak tumbuh terlalu cepat, sebelum sempat kehilangan dunia kecil yang pernah begitu luas.
              </p>
              <a
                class="btn"
                href=""
                target="_blank"
              >
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BLOG END -->

    <!-- icons-->
    <script>
      feather.replace();
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>

