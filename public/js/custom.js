$(document).ready(function(){
// Tool Tip
    $('[data-toggle="tooltip"]').tooltip();
// Tool Tip

// Navigation button click
$('.nav-toggle-btn').on('click',function(){
  
    $('.page-container').toggleClass('display-full');
  })
// Navigation button click

 // Navigation mainpanel click (vishal)
 $('.mainpanel').on('click', function(){
  if( parseInt( $('.page-container').css('width') ) < 800 ){
    if($('.page-container').hasClass('display-full')==false)
     $('.page-container').toggleClass('display-full'); 
  }
})

// Full width less than 800
var windowWidth=$(window).width();
if(windowWidth < 800 ){
$('.page-container').addClass('display-full');
}
// Full width less than 800

  // view password btn
  $('.toggle-password').on('click', function () {
    $(this).toggleClass("icon-eye1 icon-eye-off1");
    var inputpass = $('#pass_log_id').attr("type");

    if (inputpass == "password") {
      $('#pass_log_id').attr("type", "text");
    } else {
      $('#pass_log_id').attr("type", "password");
    }
  });

// view password btn

// Logout madal
$('.logout').click(function(){

    $('.logout-modal').addClass('show')
})


$('.nologout').click(function(){
    $('.logout-modal').removeClass('show') 
})
// Logout madal


});

