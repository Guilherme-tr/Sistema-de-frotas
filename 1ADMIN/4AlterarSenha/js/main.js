// ---------Responsive-navbar-active-animation-----------
function test(){
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
      "top":itemPosNewAnimTop.top + "px", 
      "left":itemPosNewAnimLeft.left + "px",
      "height": activeWidthNewAnimHeight + "px",
      "width": activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click","li",function(e){
      $('#navbarSupportedContent ul li').removeClass("active");
      $(this).addClass('active');
      var activeWidthNewAnimHeight = $(this).innerHeight();
      var activeWidthNewAnimWidth = $(this).innerWidth();
      var itemPosNewAnimTop = $(this).position();
      var itemPosNewAnimLeft = $(this).position();
      $(".hori-selector").css({
        "top":itemPosNewAnimTop.top + "px", 
        "left":itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
      });
    });
  }
  $(document).ready(function(){
    setTimeout(function(){ test(); });
  });
  $(window).on('resize', function(){
    setTimeout(function(){ test(); }, 500);
  });
  $(".navbar-toggler").click(function(){
    setTimeout(function(){ test(); });
  });
  $('.unmask').on('click', function(){  
    if($(this).prev('input').attr('type') == 'password')
      $(this).prev('input').prop('type', 'text');  
    else
      $(this).prev('input').prop('type', 'password');  
    return false;
  });
  //Begin supreme heuristics 
  $('.password').on('keyup',function (){
    var p_c = $('#p-c');
    var p = $('#p');
    console.log(p.val() + p_c.val());
   if(p.val().length > 0){
    if(p.val() != p_c.val()) {
      $('#valid').html("Senha não coincide");
    } else {
       $('#valid').html('');  
    }
      var s = 'fraca'
  if(p.val().length > 5 && p.val().match(/\d+/g))
    s = 'média';
  if(p.val().length > 6 && p.val().match(/[^\w\s]/gi))
    s = 'forte';   
     $('#strong span').addClass(s).html(s);
    }
  });
(function ($) {
  "use strict";

        
    

})(jQuery);