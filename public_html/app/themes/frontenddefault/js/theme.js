$(function() {
    function LoadThemeCopy() {
        var seconds = new Date();
        $(".themecopy").html("Proudly Powered by Doxramos CMS<br />" + seconds);
    }
    LoadThemeCopy();
    window.setInterval(function() {
        LoadThemeCopy();
    }, 1000);
    //$(".themecopy").html("Proudly Powered by Doxramos CMS");
})