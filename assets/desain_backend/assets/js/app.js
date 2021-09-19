 
//BACKGROUND CHANGER

  $(function() {
      $("#button-bg").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/blue-sky.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg2").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg2.jpg')no-repeat center center fixed"
          });
      });


      $("#button-bg3").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg.jpg')no-repeat center center fixed"
          });


      });

      $("#button-bg5").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/blue-sky.jpg')no-repeat center center fixed"
          });

      });

      $("#button-bg6").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/blurred-background-2.jpg')no-repeat center center fixed"
          });

      });

      $("#button-bg7").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg.png')no-repeat center center fixed"
          });

      });
      $("#button-bg8").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg8.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg9").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg9.jpg')no-repeat center center fixed"
          });
      });

      $("#button-bg10").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg10.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg11").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg11.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg12").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg12.jpg')no-repeat center center fixed"
          });
      });

      $("#button-bg13").click(function() {
          $("body").css({
              "background": "url('http://sewaapart.local/assets/desain_backend/assets/img/bg13.jpg')no-repeat center center fixed"
          });

      });
      /**
       * Background Changer end
       */
  });

//TOGGLE CLOSE
    $('.nav-toggle').click(function() {
        //get collapse content selector
        var collapse_content_selector = $(this).attr('href');

        //make the collapse content to be shown or hide
        var toggle_switch = $(this);
        $(collapse_content_selector).slideToggle(function() {
            if ($(this).css('display') == 'block') {
                //change the button label to be 'Show'
                toggle_switch.html('<span class="entypo-minus-squared"></span>');
            } else {
                //change the button label to be 'Hide'
                toggle_switch.html('<span class="entypo-plus-squared"></span>');
            }
        });
    });


    $('.nav-toggle-alt').click(function() {
        //get collapse content selector
        var collapse_content_selector = $(this).attr('href');

        //make the collapse content to be shown or hide
        var toggle_switch = $(this);
        $(collapse_content_selector).slideToggle(function() {
            if ($(this).css('display') == 'block') {
                //change the button label to be 'Show'
                toggle_switch.html('<span class="entypo-up-open"></span>');
            } else {
                //change the button label to be 'Hide'
                toggle_switch.html('<span class="entypo-down-open"></span>');
            }
        });
        return false;
    });
    //CLOSE ELEMENT
    $(".gone").click(function() {
        var collapse_content_close = $(this).attr('href');
        $(collapse_content_close).hide();



    });

//tooltip
    $('.tooltitle').tooltip();
 
