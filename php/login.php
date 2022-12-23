<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sass/utils.css">

    <script src='./assets/jQuery/jquery-3.6.3.js'></script>

</head>
<body>

    <!-- start #header -->
        <header id="header">

            <!-- Login Area -->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <a class="navbar-brand" href="index.php">Mobile Shopee</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                   
                  </ul>
                  <form action="#" class="font-size-14  font-rubik">
                    <a href='#' class="py-2 mx-2" name="account" id="accountSignIn">
                      <span class="font-size-16 px-2 text-white"><i class="fas fa-user mx-2"></i><?= isset($_SESSION) ? 'My Account' : 'Sign In' ?></span>  <!-- if not signed in change My Account to Sign in-->
                    </a>
                    <?php
                    if (isset($_SESSION)) { 
                      echo '
                     <a href="#" class="py-2 mx-2" name="wishlist">
                      <span class="font-size-16 px-2 text-white"><i class="fas fa-heart mx-2"></i>Wishlist</span>
                    </a>
                      <a href="cart.php" class="py-2 mx-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                      </a>';
                    } ?>
                  </form>
                </div>
              </nav>
               <!-- !Login Area -->
        </header>
    <!-- !start #header -->

    <!-- start #main-site -->
        <main id="main-site">
          
          <!-- Owl-carousel -->
            <section id="banner-area">
              <div class="owl-carousel owl-theme">
                  <div class="item">
                    <img src="assets\Banner1.png" alt="Banner1">
                  </div>
                  <div class="item">
                    <img src="assets/Banner2.png" alt="Banner2">
                  </div>
                  <div class="item">
                    <img src="assets/Banner1.png" alt="Banner3">
                  </div>
              </div>
            </section>
          <!-- !Owl-carousel -->
        <!-- Login Form-->
        <!-- in form onsubmit: onsubmit="event.preventDefault(); validateForm()" -->
          <div id="overlay" class="flex">
            <form method="post" class="loginForm" class="flex">
                <div class="flex">
                    <button type="button" onclick="changeForm(0)" class="btn btn-primary submitOptionBtn signIn">Sign In </button>
                    <button type="button" onclick="changeForm(1)" class="btn btn-primary submitOptionBtn signUp "> Sign Up </button>
                </div>
                <div class="py-2 changes">
                  <input type="text" id="email" placeholder="Email">
                  <div class="er">
                    <small id="emailEr" class="error"></small>
                  </div>
                  <input type="password" autocomplete="current-password" id="password" placeholder="Password">
              <i class="far fa-eye" id="togglePassword"></i>
              <div class="er">
                <small id="passEr" class="error"></small>
              </div>
                </div>
                <span class="test"></span>
                <div>
                  <button type="button" onclick="submitValidateAndInitiate()" id="submitBtn" class="btn btn-primary submitForm">Sign In</button>
                  <p id="success"></p>
                  <p id="verificationButton"></p>
                </div>
            </form>
          </div>
          <!-- !Login Form -->
          <!-- Blogs -->
            <section id="blogs">
              <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                      <img src="assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                      <img src="assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                      <img src="assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
                      <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
                      <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <!-- !Blogs -->

        </main>
    <!-- !start #main-site -->

    <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newsletter</h4>
                <form class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Email *">
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary .color-second-bg mb-2">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2020. Desing By <a href="#" class="color-second">Daily Tuition</a></p>
        </div>
    <!-- !start #footer -->

    <script src="./assets/jQuery/jquery-3.6.3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- Custom Javascript -->
    <script src="index.js"></script>
</body>
</html>