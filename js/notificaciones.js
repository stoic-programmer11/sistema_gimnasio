$(function(){
  $("h3").css({"color": "yellow"});


  $(".profile .icon_wrap").click(function(){
     $(this).parent().toggleClass("active");
  });

})


// $(function(){
//   $("h3").css({"color": "yellow"});

//   $(".notifications .icon_wrap").click(function(){
//     $(this).siblings(".notification_dd").toggleClass("active");
//     $(this).parent().siblings(".profile").find(".profile_dd").removeClass("active");
//   });

//   $(".profile .icon_wrap").click(function(){
//     $(this).parent().toggleClass("active");
//     $(this).parent().siblings(".notifications").find(".notification_dd").removeClass("active");
//   });
// })


