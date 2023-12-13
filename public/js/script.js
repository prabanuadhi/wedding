$(document).ready(function () {
    overlayalign();
    section1resize();
    sec1middlealign();
    sec1countdown();

    var vload = 'n';
    $('#background-video').on('canplay', function (event) {
        if(vload == 'n'){
            vload = 'y';
        }
    });

    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        width: "90vw",
        height: "90vh"
    });
});

var audio = document.getElementById("audio");

function buka() {
    $('.overlay').fadeOut(800);
    $('body').css('overflow-y', 'auto');
    audio.play();
    $('#on').show();
}

function mute(val) {
    if(val == 'y') {
        audio.muted = true;
        $('#on').hide();
        $('#off').show();
    } else {
        audio.muted = false;
        $('#off').hide();
        $('#on').show();
    }
}

$(window).on('resize', function () {
    section1resize();
    sec1middlealign();
});

function overlayalign() {
    $('.kepada').css({ 'font-size': ((0.072*$('#imgsambutan').height())/2)+'px' });
    $('.btn-buka').css({ 'font-size': ((0.064*$('#imgsambutan').height())/2)+'px' });
    $('.btn-buka').css({ 'width': ($('#imgsambutan').width()*0.6+'px') });
    $('.btn-buka').css({ 'margin-left': ($('#imgsambutan').width()*0.2+'px') });
    $('.btn-buka').css({ 'bottom': ($('#imgsambutan').height()*0.110+'px') });
    $('.sambutan').css({ 'margin-top': (($(window).height()-$('.sambutan').height())/2)+'px', 'margin-bottom': (($(window).height()-$('.sambutan').height())/2)+'px' });
    $('.loading').fadeOut(800);
    // $('.kepada').css({ 'bottom': ((0.269*$('#imgsambutan').height())/2) });
    // if($(window).height() > $(window).width()){
    // } else {

    // }
}

function section1resize() {
    $('#section1').width($('#background-video').width());
    $('#section1').height($('#background-video').height());
}

function sec1middlealign() {
    if($(window).height() > $(window).width()) $('.img1').css('margin-top', (($('#section1').height() - ($('.img1').height() + $('#tanggal').height() + $('#countdown').height())) / 2) - 65);
    else $('.img1').css('margin-top', (($('#section1').height() - ($('.img1').height() + $('#tanggal').height() + $('#countdown').height())) / 2) - 20);
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