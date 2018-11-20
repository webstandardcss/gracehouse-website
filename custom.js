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

    $(".grace-menu").click(function() {
        window.location = $(this).find("a").attr("href"); 
        return false;
    });    

  })();

  


  