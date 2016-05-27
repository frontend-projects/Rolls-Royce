 $(document).ready(function () {


  $('.carousel').carousel({
  interval: false
  
});

  if($(window).width() >= 1025){
    
	$('.site-menu > ul  li').hover(function(){
		$(this).find('ul').stop().slideDown();

	}, function(){
$(this).find('ul').stop().slideUp();

	});
} else{
    $('.site-menu > ul li:first-child').on('click', function(){
        $(this).find('ul').slideToggle(600);
        $(this).toggleClass('rotate-cl');
    });    
}



	$('.sub_menu li').hover(function(){
		//var src = $(this).find('img').attr("src").match(/[^\.]+/) + "-hover.png";
       // $(this).find('img').attr('src', src);
        if($(window).width() >= 1025){
         $(this).find('p a').stop().slideDown();
        }

	}, function(){

    //var src = $(this).find('img').attr("src").replace("-hover.png", ".png");
        //$(this).find('img').attr('src', src);
        if($(window).width() >= 1025){
        $(this).find('p a').stop().slideUp();
        }
	});






 //four car modal 

$('.thumb-car li').on('click', function(){

    if($(this).hasClass('selected_li')){

        return false;
    }else if($(window).width() <= 750) {
     
     $('.thumb-car li').show();
     $(this).hide();
     
     $('.thumb-car li').removeClass('selected_li');
	$(this).addClass('selected_li');

    var cusatr = $(this).attr('cusatr');
	var cusatr1 = $(this).attr('cusId');
    $('.car-bg img').addClass('gray');      
    $(cusatr).removeClass('gray');
   
    setTimeout(function(){
	$('.car-bg img').fadeOut(200);
	$('.hide-sec').fadeOut(100);
    $('.car-mob').fadeOut(100);
    $(cusatr).fadeIn(800);
    $(cusatr1).fadeIn(800);

    }, 500);
	
} else {

    $('.thumb-car li').removeClass('selected_li');
    $(this).addClass('selected_li');

    var cusatr = $(this).attr('cusatr');
    $('.car-bg img').addClass('gray');      
    $(cusatr).removeClass('gray');
    
    setTimeout(function(){
    $('.car-bg img').fadeOut(200);
    $('.hide-sec').fadeOut(100);
    $(cusatr).fadeIn(800);

    }, 500);
    
}
});



// slider height


var $window_height= $(window).height();
//alert($window_height);
//var $window_width= $(window).width();
//alert($window_width);



$('.slider_main').height($window_height);
$('.slider_main .item').height($window_height);
$('.left-vid').height($window_height);
$('.right-vid').height($window_height);
//$('.section').height($window_height);



// video 

var vid = document.getElementById('bgvid');
var vid1 = document.getElementById('bgvid1');

            $('#bgvid').mouseenter(function(){
              
               vid.play();
            });

             $('#bgvid').mouseout(function(){
              
               vid.pause();
            });


             $('#bgvid1').mouseenter(function(){
              
               vid1.play();
            });

             $('#bgvid1').mouseout(function(){
              
               vid1.pause();
            });


 // nav header
 
 $('#all_sec').fullpage({
                //sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
                //anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                //menu: '#menu',
                css3: true,
                'navigation': true,
                
                scrollingSpeed: 1000,

                onLeave: function(index, nextIndex, direction){
                var leavingSection = $(this);
                leavingSection.find('.content').fadeOut();


            //after leaving section 2
            if(index == 0){
                //$('.header-menu').slideDown();
            }else if(index == 7){

              $('.section_6 .content').fadeOut();
            }else{
                $('.header-menu').slideUp();
            }


        },


        afterLoad: function(anchorLink, index){
            var loadedSection = $(this);
            loadedSection.find('.content').fadeIn();
            $('.section_6 .content').fadeOut();

            //using index
            if(index == 1){
                $('.header-menu').slideDown();
            }else {

              //$('.header-menu').slideUp();
            }

            
        }
            });



$('#all_sec1').fullpage({
                //sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
                //anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                //menu: '#menu',
                css3: true,
                'navigation': true,
                
                scrollingSpeed: 1000,

                onLeave: function(index, nextIndex, direction){
                var leavingSection = $(this);
                leavingSection.find('.content').fadeOut();


        },


        afterLoad: function(anchorLink, index){
            var loadedSection = $(this);
            loadedSection.find('.content').fadeIn();
            
 
        }
            });


// section 5

$('.choose-sec ul li').on('click', function(event){
    event.preventDefault();
    if($(this).hasClass('active')){
         return false;
    }else{

           $('.choose-sec ul li').removeClass('active');
            $(this).addClass('active');
            var idHolder = $(this).find('a').attr('href');
            var idHolder1 = $(this).find('a').attr('hreft');
            
            $('.image-bg').fadeOut();
            $('.diff-title').hide();
            $(idHolder).fadeIn();
            $(idHolder1).show();

    }
 



});

// toogle button

 var $toggleButton = $('.toggle-button');

  $toggleButton.on('click', function() {
    $(this).toggleClass('button-open');
    $('.site-menu').slideToggle();
    //$('.site-menu').toggleClass('open');
  });


// form

// $('select').material_select();


});



$(window).resize(function(){
	
var $window_height1= $(window).height();
$('.slider_main').height($window_height1);
$('.slider_main .item').height($window_height1);

$('.left-vid').height($window_height1);
$('.right-vid').height($window_height1);
//$('.section').height($window_height1);
	
});

// create the image rotator
/*
$(function() {
            
            setInterval("rotateImages()", 4000);
        });

        function rotateImages() {
            var oCurPhoto = $('#photoShow div.current');
            var oNxtPhoto = oCurPhoto.next();
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $('#photoShow div:first');

            oCurPhoto.removeClass('current').addClass('previous');
            
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
                function() {
                    oCurPhoto.removeClass('previous');
                });
        }

   */ 
  
$(function() {

            $("#slideshow > div:gt(0)").hide();
            
            function slideImage () {
              $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(400)
                .end()
                .appendTo('#slideshow');
                
            }

            setInterval(slideImage,  10000);

        });


$(function() {

            $("#slideshow1 > div:gt(0)").hide();
            
            function slideImage1 () {
              $('#slideshow1 > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(400)
                .end()
                .appendTo('#slideshow1');
                
            }

            setInterval(slideImage1,  4000);

        });

var vidId = $('#dawn_vid');
vidId.on('ended', function(){ 
$('.section_6 .content').show();

  });









 
