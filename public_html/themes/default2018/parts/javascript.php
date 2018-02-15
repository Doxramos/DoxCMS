<script>
    $(function() {
        DynamicData('/bin/process.php&process=loadtopmessages', 'dropdown-messages');
        DynamicData('/bin/process.php&process=checknew', 'mymessages');
        setInterval(function() {
            DynamicData('/bin/process.php&process=loadtopmessages', 'dropdown-messages');
            DynamicData('/bin/process.php&process=checknew', 'mymessages');

        }, 1000);
        //Actions
        $("#createvendor").submit(function(e) {
            e.preventDefault();
            var doAfter = $("#doAfter").val();
            var dataString = $(this).serialize();
            SendProcess(dataString,doAfter);
        });
        $("#resultlimit").change(function(e) {
            VendorDropDownChanged();
        });
        $(".shiplabel").click(function(e) {
            var process = 'createlabel';
            var toname = $(this).data('company');
            var fromteam = $(this).data('team');
            var url = '/shippinglabel.php?process=' + process + '&to=' + toname + '&team=' + fromteam;
            InternalWindow(url);
        });
        //Functions
        function InternalWindow(url) {
            window.open(url,'winname',"directories=0,titlebar=0,toolbar=0,location=0,status=0,menubar=0,scrollbars=no,resizable=no,width=800,height=450");
        }
        function SendProcess(dataString, doAfter = null) {
            $.ajax({
                type: "POST",
                url: "bin/process.php",
                data: dataString,
                success: function (data) {
                    switch(doAfter) {
                        case 'alert': alert(data); break;
                        case 'reload': location.reload(); break;
                        default: ''; break;
                    }
                }
            });
        }
        function DynamicData(dataString, div) {
            $.ajax({
                type: "POST",
                url: "bin/process.php",
                data: dataString,
                success: function (data) {
                    $('.' + div).html(data);
                    //html(dataString + div);
                    }
                });
        }

        function VendorDropDownChanged() {
                var friendlyURLVal = '<?php echo FriendlyUrl(); ?>';
                switch(friendlyURLVal) {
                    case '': var friendlyURL = false; break;
                    case '1': var friendlyURL = true; break;
                }
                var resultLimit = $('#resultlimit').find(":selected").text();
                var oldURL = window.location.href;
                var index = 0;
                var newURL = oldURL;
                index = oldURL.indexOf('page');
                if(index == -1){
                    index = oldURL.indexOf('#');
                }
                if(index != -1){
                    newURL = oldURL.substring(0, index);
                }
                switch(friendlyURL) {
                    case true: var trueurl = newURL + "/1/" + resultLimit; break;
                    case false: var trueurl = newURL + "&page=1&limit=" + resultLimit;
                }
                location.href=trueurl;
        }
        function LoadVendorTable(process) {
            var dataString = 'process=loadvendortable';
            $.ajax({
                type: "POST",
                url: "bin/process.php",
                data: dataString,
                success: function (data) {
                    $("#vendortable").html(data);
                    }
                });
        }
    });
</script>