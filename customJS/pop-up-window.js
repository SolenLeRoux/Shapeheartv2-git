$(document).ready( function() {

    setTimeout(loadPopupBox, 3000);

    $('.close').click( function() {
        unloadPopupBox();
    });

    $('.pop-in').click(function() {
        loadPopupBox();
    });

    $('#runwith-btn').click(function() {
        loadPopupBox();
    });

    function unloadPopupBox() {    // TO Unload the Popupbox
        $('#mybox').fadeOut(1000);
    }

    function loadPopupBox() {    // To Load the Popupbox
        $('#mybox').fadeIn(1000);
    }
});