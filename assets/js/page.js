// Off Canvas Ja
(function($) {
  'use strict';
  $(function() {
    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active')
    });
  });
})(jQuery);

// Hoverable Collapse
(function($) {
'use strict';
$(document).on('mouseenter mouseleave', '.sidebar .nav-item', function(ev) {
    var body = $('body');
    var sidebarIconOnly = body.hasClass("sidebar-icon-only");
    var sidebarFixed = body.hasClass("sidebar-fixed");
    if (!('ontouchstart' in document.documentElement)) {
    if (sidebarIconOnly) {
        if (sidebarFixed) {
        if (ev.type === 'mouseenter') {
            body.removeClass('sidebar-icon-only');
        }
        } else {
        var $menuItem = $(this);
        if (ev.type === 'mouseenter') {
            $menuItem.addClass('hover-open')
        } else {
            $menuItem.removeClass('hover-open')
        }
        }
    }
    }
});
})(jQuery);

// template js
(function($) {
    $(function() {
        var body = $('body');
        var contentWrapper = $('.content-wrapper');
        var scroller = $('.container-scroller');
        var footer = $('.footer');
        var sidebar = $('.sidebar');

        //Close other submenu in sidebar on opening any
        sidebar.on('show.bs.collapse', '.collapse', function() {
            sidebar.find('.collapse.show').collapse('hide');
        });


        //Change sidebar and content-wrapper height
        applyStyles();

        function applyStyles() {
            //Applying perfect scrollbar
            if (!body.hasClass("rtl")) {
                if ($('.settings-panel .tab-content .tab-pane.scroll-wrapper').length) {
                    new PerfectScrollbar('.settings-panel .tab-content .tab-pane.scroll-wrapper');
                }
                
                if (body.hasClass("sidebar-fixed")) {
                    if($('#sidebar').length) {
                        new PerfectScrollbar('#sidebar');
                    }
                }
            }
        }

        $('[data-toggle="minimize"]').on("click", function() {
        if ((body.hasClass('sidebar-toggle-display')) || (body.hasClass('sidebar-absolute'))) {
            body.toggleClass('sidebar-hidden');
        } else {
            body.toggleClass('sidebar-icon-only');
        }
        });

        //checkbox and radios
        $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');

        //Horizontal menu in mobile
        $('[data-toggle="horizontal-menu-toggle"]').on("click", function() {
        $(".horizontal-menu .bottom-navbar").toggleClass("header-toggled");
        });
        // Horizontal menu navigation in mobile menu on click
        var navItemClicked = $('.horizontal-menu .page-navigation >.nav-item');
        navItemClicked.on("click", function(event) {
        if(window.matchMedia('(max-width: 991px)').matches) {
            if(!($(this).hasClass('show-submenu'))) {
            navItemClicked.removeClass('show-submenu');
            }
            $(this).toggleClass('show-submenu');
        }        
        })

        $(window).scroll(function() {
        if(window.matchMedia('(min-width: 992px)').matches) {
            var header = $('.horizontal-menu');
            if ($(window).scrollTop() >= 70) {
            $(header).addClass('fixed-on-scroll');
            } else {
            $(header).removeClass('fixed-on-scroll');
            }
        }
        });
    });
})(jQuery);

//   Settings js
(function($) {
    'use strict';
    $(function() {
      $(".nav-settings").on("click", function() {
        $("#right-sidebar").toggleClass("open");
      });
      $(".settings-close").on("click", function() {
        $("#right-sidebar,#theme-settings").removeClass("open");
      });
  
      $("#settings-trigger").on("click" , function(){
        $("#theme-settings").toggleClass("open");
      });
  
  
      //background constants
      var navbar_classes = "navbar-dark navbar-primary navbar-secondary";
      var sidebar_classes = "sidebar-light sidebar-dark";
      var $body = $("body");
  
      //sidebar backgrounds
      $("#sidebar-light-theme").on("click" , function(){
        $body.removeClass(sidebar_classes);
        $body.addClass("sidebar-light");
        $(".sidebar-bg-options").removeClass("selected");
        $(this).addClass("selected");
      });
      $("#sidebar-dark-theme").on("click" , function(){
        $body.removeClass(sidebar_classes);
        $body.addClass("sidebar-dark");
        $(".sidebar-bg-options").removeClass("selected");
        $(this).addClass("selected");
      });
  
  
      //Navbar Backgrounds
      $(".tiles.primary").on("click" , function(){
        $(".navbar").removeClass(navbar_classes);
        $(".navbar").addClass("navbar-primary");
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
      $(".tiles.secondary").on("click" , function(){
        $(".navbar").removeClass(navbar_classes);
        $(".navbar").addClass("navbar-secondary");
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
      $(".tiles.dark").on("click" , function(){
        $(".navbar").removeClass(navbar_classes);
        $(".navbar").addClass("navbar-dark");
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
      $(".tiles.default").on("click" , function(){
        $(".navbar").removeClass(navbar_classes);
        $(".tiles").removeClass("selected");
        $(this).addClass("selected");
      });
    });
  })(jQuery);

//   Todo list
(function($) {
    'use strict';
    $(function() {
      var todoListItem = $('.todo-list');
      var todoListInput = $('.todo-list-input');
      $('.todo-list-add-btn').on("click", function(event) {
        event.preventDefault();
  
        var item = $(this).prevAll('.todo-list-input').val();
  
        if (item) {
          todoListItem.append("<li><div class='form-check'><label class='form-check-label'><input class='checkbox' type='checkbox'/>" + item + "<i class='input-helper'></i></label></div><i class='remove mdi mdi-close-circle-outline'></i></li>");
          todoListInput.val("");
        }
  
      });
  
      todoListItem.on('change', '.checkbox', function() {
        if ($(this).attr('checked')) {
          $(this).removeAttr('checked');
        } else {
          $(this).attr('checked', 'checked');
        }
  
        $(this).closest("li").toggleClass('completed');
  
      });
  
      todoListItem.on('click', '.remove', function() {
        $(this).parent().remove();
      });
  
    });
  })(jQuery);

  (function($) {
    'use strict';
    $(function() {
      $('.file-upload-browse').on('click', function() {
        var file = $(this).parent().parent().parent().find('.file-upload-default');
        file.trigger('click');
      });
      $('.file-upload-default').on('change', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      });
    });
  })(jQuery);