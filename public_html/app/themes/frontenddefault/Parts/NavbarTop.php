<?php
/**
 * Created by Doxramos.
 * Powered by JQuery, Font-Awesome, and Bootstrap
 * Copyright Doxramos Web Development
 *
 */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo Config("SiteDetails", "SiteName"); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <?php
            \page\HomeMenu('<li class="nav-item ">', '<li class="nav-item active">', "</li>", "nav-link", "horizontal");
            \page\CreateMenu('<li class="nav-item">', '<li class="nav-item active">', "</li>", "nav-link", "TopMenu"); ?>

        </ul>
        <div class="form-inline my-2 my-lg-0">
            <?php \module\LoadActiveModules("top-right-nav"); ?>
        </div>
    </div>
</nav>

