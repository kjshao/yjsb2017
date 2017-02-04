jssor_1_slider_init = function() {

    var jssor_1_options = {
      $AutoPlay: true,
      $AutoPlaySteps: 3,
      $SlideDuration: 160,
      $FillMode: 4,
      $SlideWidth: 200,
      $SlideSpacing: 6,
      $Cols: 5,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 3
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
};

jssor_2_slider_init = function() {

    var jssor_2_options = {
      $AutoPlay: true,
      $SlideDuration: 500,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $ChanceToShow: 1
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
};

$(function() {
  $('.vtick1').vTicker('init', {speed: 1000, 
    pause: 1000,
    height: 280,
    showItems: 10,
    padding: 4});
});

//$(function() {
//  $('.vtick2').vTicker('init', {speed: 1000, 
//    pause: 1000,
//    height: 140,
//    showItems: 10,
//    padding: 4});
//});
