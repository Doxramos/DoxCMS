<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <?php LoadCSS("vendor/bootstrap/css", "bootstrap.min.css"); ?>
    <!-- MetisMenu CSS -->
    <?php LoadCSS("vendor/metisMenu", "metisMenu.min.css"); ?>
    <!-- Custom CSS -->
    <?php LoadCSS("dist/css", "sb-admin-2.css"); ?>

    <!-- Custom Fonts -->
    <?php LoadCSS("vendor/font-awesome/css", "font-awesome.min.css"); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>Please Sign In</center></h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" id="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" id="remember">Remember Me
                                    </label>
                                </div>
                                <input type="hidden" name="process" value="login" id="process">
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                        <br />
                        <center>Or register here for free!</center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <?php LoadJS("vendor/jquery", "jquery.min.js"); ?>
    <!-- Bootstrap Core JavaScript -->
    <?php LoadJS("vendor/bootstrap/js", "bootstrap.min.js"); ?>
    <!-- Metis Menu Plugin JavaScript -->
    <?php LoadJS("vendor/metisMenu", "metisMenu.min.js"); ?>
    <!-- Custom Theme JavaScript -->
    <?php LoadJS("dist/js", "sb-admin-2.js"); ?>

</body>
<script>
    $(function() {
        $("#login").submit(function(e) {
            var form = $(this);
            e.preventDefault();
            var email = $("#email").val();
            if(email == "") {
                alert("Please enter your email address");
            }
            var password = $("#password").val();
            if(password == "") {
                alert("Please enter your password");
            }
            else {
                var formData = form.serialize();
                Login(formData);
            }
        });
    });
    function Login(passData) {
        var dataString = passData;
        $.ajax({
            type: "POST",
            url: "bin/process.php",
            data: dataString,
            success: function (data) {
                if(data == 0) {
                    alert("Wrong Email or Password");
                }
                else {

                    location.reload();
                }
            }
        });
    }
</script>
</html>
