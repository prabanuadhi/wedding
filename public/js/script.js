$(document).ready(function () {
    section1resize();
    sec1middlealign();
    sec1countdown();

    $('#background-video').on('loadstart', function (event) {
        console.log('uuk');
    });
    $('#background-video').on('canplay', function (event) {
        console.log('aak');
    });

    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        width: "90vw",
        height: "90vh"
    });
});

function buka() {
    $('.overlay').fadeOut(800);
    $('body').css('overflow-y', 'auto');
}

$(window).on('resize', function () {
    section1resize();
    sec1middlealign();
});

function section1resize() {
    $('#section1').width($('#background-video').width());
    $('#section1').height($('#background-video').height());
}

function sec1middlealign() {
    $('.img1').css('margin-top', (($('#section1').height() - ($('.img1').height() + $('#tanggal').height() + $('#countdown').height())) / 2) - 20);
}

function sec1countdown() {
    var countDownDate = new Date("Dec 23, 2023 00:00:00").getTime();
    // Update the count down every 1 second
    var x = setInterval(function () {
        // Get current date and time
        var now = new Date().getTime();
        // Time to the date
        var timeToDate = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(timeToDate / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeToDate % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeToDate % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeToDate % (1000 * 60)) / 1000);
        // Display the result in the element with id="counter"
        $('#d').html(days);
        $('#h').html(hours);
        $('#m').html(minutes);
        $('#s').html(seconds);
    }, 1000);
}

function copyToClipboard(elementId, changeel) {
    var aux = document.createElement("input");
    aux.setAttribute("value", document.getElementById(elementId).innerHTML);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
    $('#' + changeel).text('copied');
    setTimeout(function () {
        $('#' + changeel).text('copy');
    }, 2000);
}