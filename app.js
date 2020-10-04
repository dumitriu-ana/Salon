$(document).ready(function(){
  $(window).scroll(function() {
        if ($(this).scrollTop() < screen.height-150) {
          $('.navbar').css("background-color", "rgba(212, 170, 2,0.3)");
          $('.navbar').css("transition", "all .5s");
        } else {
          $('.navbar').css("background-color", "#d4aa02");
          $('.navbar').css("transition", "all .5s");
        }
      });

      var l=["imgs/1.jpg", "imgs/2.jpg", "imgs/3.jpg"];

      $(".size").on('click', function(){
        $("#imagine").attr("src", l[parseInt($(this).html())-1]);
      });

      var a=["imgs/4.jpg", "imgs/5.jpg", "imgs/6.jpg"];
      $(".size1").on('click', function(){
        $("#imagine1").attr("src", a[parseInt($(this).html())-1]);
      });

      var b=["imgs/8.jpg", "imgs/7.jpg", "imgs/8.jpg"];
      $(".size2").on('click', function(){
        $("#imagine2").attr("src", b[parseInt($(this).html())-1]);
      });
      var c=["imgs/10.jpg", "imgs/11.jpg", "imgs/12.jpg"];
      $(".size3").on('click', function(){
        $("#imagine3").attr("src", c[parseInt($(this).html())-1]);
      });
});
