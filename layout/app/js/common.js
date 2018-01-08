$(function() {

    // tabs
    $('ul.products__tabs').on('click', 'li:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('.products').find('div.products__content').removeClass('active').eq($(this).index()).addClass('active');
    });

    $('ul.cart__list').on('click', 'li:not(.active)', function() {
        $(this)
          .addClass('active').siblings().removeClass('active')
          .closest('.cart').find('div.cart__info').removeClass('active').eq($(this).index()).addClass('active')
        var attr = $(this).find('img').attr("src");
        $(this).closest('.cart').find('.cart__bigPhoto').children().attr('src', attr);
    });
    if ($( window ).width() > 767) {
        $(window).scroll(function() {
            var pos = $(this).scrollTop();
            $('.subscribe *').css({
              'transform' : 'translate(0%, -'  + pos/120 + "%",
              'transition' : 'ease 0.6s'
            });
        });
    }
});

//youtube script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;

onYouTubeIframeAPIReady = function () {
	var video_id = $('#player').attr('data_videoId');
    player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        videoId: 'z0rxydSolwU', //'4elfy_216dI',  // youtube video id
        playerVars: {
            'autoplay': 0,
            'rel': 0,
            'showinfo': 0
        },
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
};

var p = document.getElementById ("player");
$(p).hide();

var t = document.getElementById ("thumbnail");
t.src = "img/video-img.jpg";

onPlayerStateChange = function (event) {
    if (event.data == YT.PlayerState.ENDED) {
        $('.start-video').fadeIn('normal');
    }
};

$(document).on('click', '.start-video', function () {
    $(this).hide();
    $("#player").show();
    $("#thumbnail_container").hide();
    player.playVideo();
});