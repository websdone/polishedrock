
$( document ).ready(function() {

  
  // Software

  $('.hovereffect').click(function() {
    $(this).siblings().removeClass('active').end().toggleClass('active');
  })

//  ADD ACTIVE CLASS ON MAIN NAV
 jQuery(function($) {
     var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
     $('nav.header a').each(function() {
      if (this.href === path) {
       $(this).addClass('active');
      }
     });
    });

 // LIghtbox product page
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});
$( ".close" ).click(function() {
  $('.modal').css('display', 'none');
});

// Product page accordion
/* ensure any open panels are closed before showing selected */
$('#accordion').on('show.bs.collapse', function () {
    $('#accordion .in').collapse('hide');
});

// mix it up drop-down
$( ".filter" ).click(function() {
  $('html, body').animate( { scrollTop: 0 }, 600);
  return false;
});


$(function(){
  var $sortSelect = $('#SortSelect2'),
      $sortSelect2 = $('#SortSelect'),
      $filterSelect = $('#FilterSelect'),
      $container = $('#Container'),
      $loading = $('.loading');
  
  $container.mixItUp();
  
  $sortSelect.on('change', function(){
    $container.mixItUp('sort', this.value);
  });

   $filterSelect.on('change', function(){
    $container.mixItUp('filter', this.value);
  });

   $sortSelect2.on('change', function(){
    $container.mixItUp('sort', this.value);
  });
});

// lightbox

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '../img/lightbox/1_b.jpg',
            title : 'My title'
          }, {
            href : '../img/lightbox/2_b.jpg',
            title : '2nd title'
          }, {
            href : '../img/lightbox/3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });

  $('#contact').on('submit', function(e) {
    e.preventDefault(); //Prevents default submit
    var form = $(this); 
    var post_url = form.attr('action'); 
    var post_data = form.serialize(); //Serialized the form data for process.php
    $('#loader', form).html('<img src="../img/forms/loader.gif" /> Please Wait...');
    $.ajax({
        type: 'POST',
        url: 'process.php', // Your form script
        data: post_data,
        success: function(msg) {
            $(form).fadeOut(500, function(){
                form.html(msg).fadeIn();
            });
        }
    });
});

  // $('.navbar-toggle').click(function() {
  //   $('.heading-silent').toggleClass('hide');
  //   $('.content ').css('margin-top', '10px');
  // });
});


$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});

