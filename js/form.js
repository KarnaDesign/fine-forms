function centerNotification()
{
    var wrapperWidth = $("#wrapper").width();
    var notificationWidth = $(".notification").width();

    var halfWrapperWidth = wrapperWidth / 2;
    var halfNotificationWidth = notificationWidth / 2;
    var newPosition = halfWrapperWidth - halfNotificationWidth;

    $(".notification").css("left", newPosition + "px");
}

function hideNotification()
{
    var delayInMilliseconds = 10000;
    setTimeout(function(){
        $(".notification").fadeOut();
    }, delayInMilliseconds);
}


$(document).ready(function()
{
    $("#applicationForm")[0].reset(); //Resets the form after refreshing the page. Does not apply to Firefox.

    centerNotification();

    hideNotification();
});