<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Travigo - Travel for everyone</title>
    <link rel="stylesheet" type="text/css" href="css/tour.css" />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />

    <meta
      name="description"
      content="Explore our trips and live The Good Life with Travigo
    Tours that make you fall in love with the world."
    />
    <meta
      name="keywords"
      content="travel, explore world,australia,istanbul,brasil,dubai,london,"
    />
  </head>
  <body>
    <!--header--->
    <header>
      <a href="#" class="logo">traviGoo</a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="tour.php">Tours</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </header>

    <!--Home section--->
    <section class="home" id="home">
      <div class="home-text">
        <h1>
          Travigo <br />
          Travel
        </h1>
        <p>
          Explore our trips and live The Good Life with Travigo <br />
          Tours that make you fall in love with the world.
        </p>
        <a href="#" class="home-btn">Let's go now</a>
      </div>
    </section>
    <!--Package section--->
    <section class="package" id="package">
      <div class="title">
        <h2>Our Tour</h2>
      </div>

      <div class="package-content">

      <?php 
       
       // include_once "conn.php";
       // $sql  = "SELECT * from emplois ";
       // $req = mysqli_query($conn,$sql);

       
       include "../controller/display_class.php";

       $display = new display;
       $datas = $display->show();

           
           foreach($datas as $data ){

        ?>
        <div class="box">

          <div class="thum">
            <img src="img/<?=$data["img"] ?>" alt="bali" />
            <h3>$<?=$data["price"] ?></h3>
            <div class="overlay">
              <button>Book Now</button>
            </div>
          </div>

          <div class="dest-content">
            <div class="location">
              <h4><?=$data["place"] ?></h4>
              <p><?=$data["fromm"] ?>h - <?=$data["until"] ?>h</p>
            </div>
            <div class="stars">
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
     
    </section>

    <section class="package padd" id="package">
      <div class="title">
        <h2>
          Our Upcoming <br />
          Tour Package
        </h2>
      </div>

      <div class="package-content">
        <div class="box">
          <div class="thum">
            <img src="img/img1.png" />
            <h3>$499</h3>
          </div>

          <div class="dest-content">
            <div class="location">
              <h4>London</h4>
              <p>4h - 5h</p>
            </div>
            <div class="stars">
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="thum">
            <img src="img/img2.png" />
            <h3>$499</h3>
          </div>

          <div class="dest-content">
            <div class="location">
              <h4>New York</h4>
              <p>4h - 5h</p>
            </div>
            <div class="stars">
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="thum">
            <img src="img/img3.png" />
            <h3>$499</h3>
          </div>

          <div class="dest-content">
            <div class="location">
              <h4>Dubai</h4>
              <p>4h - 5h</p>
            </div>
            <div class="stars">
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
              <a href="#"><i class="bx bxs-star"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Newsletter--->
    <section class="newsletter">
      <div class="news-text">
        <h2>Newsletter</h2>
        <p>
          Subscribe For more HTML, CSS, and <br />
          coding tutorials
        </p>
      </div>

      <div class="send">
        <form>
          <input type="email" placeholder="Write Your Email" required />
          <input type="submit" value="Submit" />
        </form>
      </div>
    </section>
    <!--footer--->
    <section id="contact">
      <div class="footer">
        <div class="main">
          <div class="list">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Tours</a></li>
            </ul>
          </div>

          <div class="list">
            <h4>Support</h4>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Tour</a></li>
            </ul>
          </div>

          <div class="list">
            <h4>Contact Info</h4>
            <ul>
              <li><a href="#">98 West 21th Street</a></li>
              <li><a href="#">New York NY 10016</a></li>
              <li><a href="#">+(123)-123-1234</a></li>
              <li><a href="#">info@travigo.com</a></li>
              <li><a href="#">+(123)-123-1234</a></li>
            </ul>
          </div>

          <div class="list">
            <h4>Connect</h4>
            <div class="social">
              <a href="#"><i class="bx bxl-facebook"></i></a>
              <a href="#"><i class="bx bxl-instagram-alt"></i></a>
              <a href="#"><i class="bx bxl-twitter"></i></a>
              <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="end-text">
        <p>Copyright ©2022 All rights reserved | Travigo</p>
      </div>
    </section>

    <!--link to js--->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
