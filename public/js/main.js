// Burger menu
$("#burgerMenu").on("click", function() {
    $("#burgerNav").toggle();
    $(".bar1, .bar2, .bar3").toggleClass("change");
});


// ----- MANAGE MESSAGES PAGE ----- //
// Select / Deselect all checkboxes (for New messages)
$("#checkAllReported").change(function () {
    $("input[type=checkbox][id=commentID]").prop("checked", $(this).prop("checked"));
});

// Select / Deselect all checkboxes (for Archived messages)
$("#checkAllToPublish").change(function () {
    $("input[type=checkbox][id=commentPublishID]").prop("checked", $(this).prop("checked"));
});


// displays a message if no new messages
if (!$.trim($(".reportedComments").html()).length) {
    $(".noReportedComments").css("display", "block");
} else {
    $(".noReportedComments").css("display", "none");
};


// displays a message if no archived messages
if (!$.trim($(".acceptDenyComments").html()).length) {
    $(".noCommentsToManage").css("display", "block");
} else {
    $(".noCommentsToManage").css("display", "none");
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


// Skills bars FIXME : les bars sont déja chargées quand je scroll, trouver comme faire pour attendre que le bloc s'affiche puis charger les bars
$( document ).ready(function() {
    var elem = document.getElementById("myBarHTML"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 90) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarCSS"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 85) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarJS"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 70) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarPHP"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 60) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarWP"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 65) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarBS"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 55) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarPS"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 80) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});

$( document ).ready(function() {
    var elem = document.getElementById("myBarAI"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 70) {
        clearInterval(id);
        } else {
        width++; 
        elem.style.width = width + "%"; 
        }
    }
});
