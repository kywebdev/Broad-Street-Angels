$(document).ready(function() {

    $(function () { objectFitImages() });

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });

    // close browser warning
    $('.browserupgrade .fa-times').on('click', function() {
        $('.browserupgrade').fadeOut();
    });

    var i = 0;
    $(".ml13 a").each(function(){

      $(this).html($(this).text().replace(/\S/g, "<span class='letter'>$&</span>") );
      if( $(this).attr("id") == undefined )
        $(this).attr("id", "m"+i) ;
        i++;
    });

    $(".ml13 a").mouseenter(function(){
      var id = $(this).attr("id");

      anime.timeline({loop: false})
        .add({
          targets: "#"+id + " .letter",
          translateY: [0,-10],
          opacity: [1,0],
          easing: "easeInExpo",
          duration: 300,
          delay: (el, i) => 100 + 30 * i
        })
        .add({
          targets: "#"+id + " .letter",
          translateY: [10,0],
          translateZ: 0,
          opacity: [0,1],
          easing: "easeOutExpo",
          duration: 300,
          delay: (el, i) => 300 + 30 * i
        });

    });

    if( $(".home").length != 0 )
    {
      $(window).scroll(function(){

        w = $(".section2").position().top - $(window).scrollTop()  + $(window).width()/3;
        if (w < 135) {
            w = 135;
        }
        $(".section2 .line").css("width", w);

        w = $(".section3").position().top - $(window).scrollTop()  + $(window).width()/3;
        $(".section3 .line").css("width", w);


        w = $(".section4").position().top - $(window).scrollTop()  + $(window).width()/3;
        $(".section4 .line").css("width", w);
      });

    }


    $(".twitter_bar .item").hide();
    $(".twitter_bar .item").first().show();
    $(".twitter_bar .prev").click(function(e){
      e.preventDefault();
      $(this).parent().fadeOut();
      if($(this).parent().next().length == 0 )
        $(this).parent().siblings().first().fadeIn();
      else
        $(this).parent().next().fadeIn();
    });
    $(".twitter_bar .next").click(function(e){
      e.preventDefault();
      $(this).parent().fadeOut();
      if($(this).parent().prev().length == 0 )
        $(this).parent().siblings().last().fadeIn();
      else
        $(this).parent().prev().fadeIn();
    });

    $('.menu-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('open closed');
        $('nav').toggleClass('is-open');
    });

});