// Burger menu
$("#burgerMenu").on("click", function() {
    $("#burgerNav").toggle();
    $(".bar1, .bar2, .bar3").toggleClass("change");
});


// ----- MANAGE MESSAGES PAGE ----- //

// displays a message box if no new messages
if ((!$.trim($(".newMesssage").html()).length) && (!$.trim($(".answeredMessage").html()).length)) {
    $(".noNewMessage").css("display", "block");
} else {
    $(".noNewMessage").css("display", "none");
};


// displays a message box if no archived messages
if (!$.trim($(".archivedMessage").html()).length) {
    $(".noArchiveMessage").css("display", "block");
} else {
    $(".noArchiveMessage").css("display", "none");
};


//New / archived messages anchors smooth Scroling
$(document).ready(function () {
    $(".js-scrollTo").on("click", function () {
        let section = $(this).attr("href");
        let speed = 750;
        $("html").animate({
            scrollTop: $(section).offset().top
        }, speed);
        return;
    });
});


// ----- MANAGE PACK QUOTE ----- //


// displays a message box if no pack quotes
if ((!$.trim($(".newPackQuote").html()).length) && (!$.trim($(".packQuote").html()).length)) {
    $(".noPackQuote").css("display", "block");
} else {
    $(".noPackQuote").css("display", "none");
};

// displays a message box if no custom quotes
if ((!$.trim($(".newCustomQuote").html()).length) && (!$.trim($(".customQuote").html()).length)) {
    $(".noCustomQuote").css("display", "block");
} else {
    $(".noCustomQuote").css("display", "none");
};





