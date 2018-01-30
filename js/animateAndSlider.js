 /* 

   SCRIPT FOR ACTIVATING ANIMATIONS ACCRORDING TO THE VIEWPORT POSITION
   + STOPS INFINITE SLIDER MOVEMENT ON USER HOVER
    
   */


 $(document).ready(function () {

     $('.introduction').addClass("hidden").viewportChecker({
         classToAdd: 'visible animated fadeInLeft',
         offset: 10
     });
     
     $('.full-row').viewportChecker({
         classToAdd: 'visible animated fadeInLeft',
         offset: 10
     });

     $('.frame *').addClass("hidden").viewportChecker({
         classToAdd: 'visible animated fadeInUp',
         offset: -500
     });


     if ((screen.width > 950)) {
         $(".photo-roll img").hover(function () {
             $(".photo-roll img").css("animation-play-state", "paused");
         });

         $(".photo-roll img").mouseleave(function () {
             $(".photo-roll img").css("animation-play-state", "running");
         });
     }

     $('.cnt').addClass("hidden").viewportChecker({
         classToAdd: 'visible animated fadeInRight',
         offset: -100
     });

     $('.odd').addClass("hidden").viewportChecker({
         classToAdd: 'visible animated fadeInDown',
         offset: 100
     });

     $('.even').addClass("hidden").viewportChecker({
         classToAdd: 'visible animated fadeInUp',
         offset: 100
     });

 });
