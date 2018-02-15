<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Config("SiteDetails", "SiteName"); ?></title>

    <!-- Bootstrap Core CSS -->
    <?php LoadCSS("vendor/bootstrap/css", "bootstrap.min.css"); ?>
    <!-- MetisMenu CSS -->
    <?php LoadCSS("vendor/metisMenu", "metisMenu.min.css"); ?>
    <!-- Custom CSS -->
    <?php LoadCSS("dist/css", "sb-admin-2.css"); ?>
    <!-- Custom Fonts -->
    <?php //LoadCSS("vendor/font-awesome/css", "font-awesome.min.css"); ?>
    <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php LoadPage(); ?>

<?php ThemeLoadPart("parts", "footer.php"); ?>
<?php VerifyEmail("green.morgan87@gmail.com"); ?>