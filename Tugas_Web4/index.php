<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title>Web Portofolio Hizkia</title>
    <link
      rel="stylesheet"
      href="style.css"
    />
  </head>
  <body>
    <!-- nav start -->
    <nav>
      <ul>
        <li>
          <a
            href="#home"
            id="home"
            >Home</a
          >
        </li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <!-- nav end -->

    <!-- home start -->
    <div class="content_pembuka">
      <h4>Hello World my name <span>Hizkia Kodoati</span></h4>
      <h4>I am informatics student from <span>Sam Ratulangi University</span></h4>
      <h4>Welcome to my portofolio</h4>
    </div>

    <div class="image_home">
      <img
        src="WhatsApp Image 2024-03-30 at 12.00.55_88ec2bfb.jpg"
        alt="gambar saya"
      />
    </div>
    <!-- home end -->

    <!-- gallery start -->
    <div class="desgal">
      <h2 id="gallery">GALLERY</h2>
      <img
        src="tiger-digital-art-hd-wallpaper-uhdpaper.com-190@1@n.jpg"
        alt="tiger"
      />
      <img
        src="cat-colorful-background-digital-art-hd-wallpaper-uhdpaper.com-531@0@i.jpg"
        alt="cat"
      />
      <img
        src="tiger-digital-art-hd-wallpaper-uhdpaper.com-189@1@n.jpg"
        alt="leopard"
      />
      <img
        src="lion-roar-colorful-digital-art-animal-hd-wallpaper-uhdpaper.com-614@1@k.jpg"
        alt="lion"
      />
    </div>
    <!-- gallery end -->

    <!-- blog start -->
    <div class="blog">
      <div
        class="judul blog"
        id="blog"
      >
        <h2>BLOG</h2>
        <div class="judulh4">
          <h4>Sepak Bola</h4>
          <h4>Monalisa</h4>
          <h4>Artificial Intelligence</h4>
        </div>
        <div class="wrap">
          <a href="blog.php?id=1">
            <div>
              <img
                src="soccer-488700_640.jpg"
                alt="sepak bola"
              />
            </div>
          </a>
          <a href="blog.php?id=2">
            <div>
              <img
                src="art-74050_640.jpg"
                alt="monalisa"
              />
            </div>
          </a>
          <a href="blog.php?id=3">
            <div>
              <img
                src="cyber-brain-7633488_640.jpg"
                alt="ai"
              />
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- blog end -->

    <!-- kontak start -->
    <div class="kontak">
      <h2 id="contact">Contact me</h2>
      <h3>Email: <a href="mailto:hizkiakodoati026@student.unsrat.ac.id">hizkiakodoati026@student.unsrat.ac.id</a></h3>
    </div>
    <!-- kontak end -->

    <script src="script.js"></script>
  </body>
</html>
