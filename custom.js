(function(){

    var parallax = document.querySelectorAll("body"),
        speed = 0.4;
  
    window.onscroll = function(){
      [].slice.call(parallax).forEach(function(el,i){
  
        var windowYOffset = window.pageYOffset,
            elBackgroundPos = "50% " + (windowYOffset * speed) + "px";
  
        el.style.backgroundPosition = elBackgroundPos;
  
      });
    };

    var menuContainer = document.querySelectorAll(".bar-menu-mobile");
    var menuSelector = document.querySelectorAll(".bar-menu");
    
    menuContainer.innerHTML = menuSelector.innerHTML;

  })();

  


  
  $(function() {

    menuMobile = $(".bar-menu-mobile");
    menuContent = $(".bar-menu");
    menuButtonShow = $(".navbar .btn-action");
    menuButtonHide = $(".bar-menu-mobile .icon-cross");



    menuMobile.hide();  
    menuButtonShow.click(function() {
        menuMobile.show();    
    });    

    menuButtonHide.click(function() {
        menuMobile.hide();    
    });    

    $(".grace-menu").click(function() {
        window.location = $(this).find("a").attr("href"); 
        return false;
    });    
});