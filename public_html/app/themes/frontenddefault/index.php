<?php
DEFINE('DEFAULT_18_P', dirname(__file__));
DEFINE('__18DefaultP__', ReplaceSlashes(DEFAULT_18_P));
\plugin\LoadActivePlugins();
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <?php
    LoadBootStrapCSS();
    LoadFontAwesome();
    LoadCSS(__18DefaultP__, "", "style.css");
    ?>

    <!-- Custom fonts for this template -->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  </head>

  <body>
<?php echo LoadFile(__18DefaultP__, "Parts", "NavbarTop.php"); ?>

    <?php \module\LoadActiveModules("top-right-nav"); ?>


    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
<div class="col-lg-8">
    <?php echo \page\GetPageDetail(PageIdent(), "html"); ?>
</div>
      </div>
    </section>






    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Ready to get started? Sign up now!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
                <li class="list-inline-item">
                    <a href="#">
                        <i class="fab fa-discord fa-2x fa-fw"></i>
                    </a>
                </li>

            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <?php LoadJQuery(); ?>
    <?php LoadBootStrapJS(); ?>
  <?php //LoadJS(__18DefaultP__, "vendor/bootstrap/js/", "bootstrap.bundle.min.js"); ?>
    <?php \module\LoadModuleJS(); ?>
  </body>

</html>
