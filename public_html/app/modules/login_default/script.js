var url = $("#login_default_functionURL").val();

$("#login_form_default").submit(function(e) {
    e.preventDefault();
    var dataToSend = $(this).serialize();
    SendAjaxData(dataToSend);
})


function SendAjaxData(dataToSend) {
    $.ajax({
        type: "POST",
        url: url,
        data: dataToSend, // serializes the form's elements.
        success: function(data)
        {
            alert(data); // show response from the php script.
        }
    });
}