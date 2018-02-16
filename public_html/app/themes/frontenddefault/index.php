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

    <title><?php echo Config("SiteDetails", "SiteName"); ?> - <?php echo PageIdent(); ?></title>

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
<?php LoadFile(__18DefaultP__, "Parts", "NavbarTop.php"); ?>

    <?php// \module\LoadActiveModules("top-right-nav"); ?>


    <!-- Icons Grid -->
    <section class="features-icons bg-light">
      <div class="container">
          <div class="row">
<div class="col-lg-9">
    <?php echo \page\GetPageDetail(PageIdent(), "html"); ?>
</div>
          <div class="col-lg-3 text-center"><?php \module\LoadActiveModules("sidebar-right"); ?></div>
          </div>
      </div>
    </section>





    <!-- Call to Action -->

    <!-- Footer -->
<footer class="footer bg-light fixed-bottom container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  h-50 text-center text-lg-left my-auto">
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
                <p class="text-muted small mb-4 mb-lg-0">&copy; <?php echo Config("SiteDetails", "SiteName").' '.date('Y'); ?>. All Rights Reserved.<br /></p>
                <p class="text-muted small mb-4 mb-lg-0 themecopy"></p>

            </div>
            <div class="col-lg-6 h-50 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-facebook fa-2x fa-fw faa-pulse animated-hover"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-twitter fa-2x fa-fw  faa-vertical animated-hover"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x fa-fw faa-bounce animated-hover"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-discord fa-2x fa-fw faa-horizontal animated-hover"></i>
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
    <?php \module\LoadModuleJS(); ?>
    <?php LoadJS(__18DefaultP__, "js/", "theme.js"); ?>
  </body>

</html>
