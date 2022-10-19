function FixedAnime() {
    var height = $('#header').outerHeight(true);
    var scroll = $(window).scrollTop();
    if (scroll >= height){
        $('#header').addClass('fixed');
      }else{
        $('#header').removeClass('fixed');
      }
  }


$("#show").hide();
$(function() {
    $('#write').on('click', function() {
        $("#show").addClass("open");
        $('#shadow').addClass("shadow");        
        $('#show').show();        
    });
});

$(function() {
    $('#close').on('click', function() {
        $("#show").removeClass("open");
        $('#shadow').removeClass("shadow");        
        $('#show').hide();     
    });
});

function FixedAnime() {
    var height = $('#show').outerHeight(true);
    var scroll = $(window).scrollTop();
    if (scroll >= height){
        $('#show').addClass('fixed');
      }else{
        $('#show').removeClass('fixed');
      }
  }

$(function() {
    $('#delete').on('click', function() {
        confirm('削除しますか？'); 
    });
});