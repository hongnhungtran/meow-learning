$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

//timer clock
var clock;
    $(document).ready(function() {
        clock = $('.clock').FlipClock(5, {
            clockFace: 'MinuteCounter',
            countdown: true,
            callbacks: {
                stop: function() {
                    $('.message').html('テストが終わりました!').css({
                    'color': 'red',
                    'font-size': '20px',
                    'font-weight': '10px',
                    'text-align': 'center',
                  });
                }
            }
        });
    });


jQuery(function($) {
  function fixDiv() {
    var $cache = $('#fixed');
    if ($(window).scrollTop() > 100)
      $cache.css({
        'position': 'fixed',
        'top': '10px'
      });
    else
      $cache.css({
        'position': 'relative',
        'top': 'auto'
      });
  }
  $(window).scroll(fixDiv);
  fixDiv();
});





