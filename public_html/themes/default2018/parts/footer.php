<!-- jQuery -->
<?php LoadJS("vendor/jquery", "jquery.min.js"); ?>
<!-- Bootstrap Core JavaScript -->
<?php LoadJS("vendor/bootstrap/js", "bootstrap.min.js"); ?>
<!-- Metis Menu Plugin JavaScript -->
<?php LoadJS("vendor/metisMenu", "metisMenu.min.js"); ?>
<!-- Custom Theme JavaScript -->
<?php LoadJS("dist/js", "sb-admin-2.js"); ?>
</body>
</html>
<script>
    function Logout() {
        var dataString = "process=logout";
        $.ajax({
            type: "POST",
            url: "bin/process.php",
            data: dataString,
            success: function (data) {
                location.reload();
            }
        });
    }
    $(function() {
        $("#logout").click(function() {
            Logout();
        });
    });

    $(function() {
        $(".sessionstart").click(function(e) {
            var dataString = "process=startsession&teamID=" + e.target.id;
            $.ajax({
                type:"POST",
                url:"bin/process.php",
                data:dataString,
                success: function (data) {
                    location.reload();
                }
            });
        });
    });

    $(function() {
        $(".sessionend").click(function(e) {
            var dataString = "process=endsession";
            $.ajax({
                type:"POST",
                url:"bin/process.php",
                data:dataString,
                success: function (data) {
                    location.reload();
                }
            });
        });
    });
    $(function() {
        $(".delete").click(function(e) {
            e.preventDefault();
            var dataref = $(this).data('ref');
            var dataid = e.target.id;
            var dataString = "process=" + dataref + "&vendorID=" + dataid;
            var r = confirm("Confirm Vendor Delete");
            if(r == true) {
                RunCommand(dataString);
            } else {

            }
        });
    });
    function RunCommand(dataString) {
        $.ajax({
            type:"POST",
            url:"bin/process.php",
            data:dataString,
            success: function (data) {
                alert(data);
                location.reload();
            }
        });
    }
    $(function() {

    });
</script>
<?php ThemeLoadPart("parts", "javascript.php"); ?>