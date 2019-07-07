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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
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
        elem.style.width = width + '%'; 
        }
    }
});