$(document).ready(function() {
    var url = $("#login_default_functionURL").val();

    $("#login_form_default").submit(function (e) {
        e.preventDefault();
        var dataToSend = $(this).serialize();
        SendAjaxData(dataToSend);
    });
    $("#default_logout").submit(function (e) {
        e.preventDefault();
        var dataToSend = "process=logout";
        SendAjaxData(dataToSend);
    })


    function SendAjaxData(dataToSend) {
        $.ajax({
            type: "POST",
            url: url,
            data: dataToSend, // serializes the form's elements.
            beforeSend: function() {
                $(".dloginstatusmessage").html('Securely Sending data to Server<br /><i class="fas fa-wrench faa-wrench animated"></i>');
            },
            success: function (data) {
                if(isNaN(data)) {
                    $(".dloginstatusmessage").html(data);
                } else {
                    location.reload();
                } // show response from the php script.
            }
        });
    }
})