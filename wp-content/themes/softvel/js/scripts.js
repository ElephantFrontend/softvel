jQuery(document).ready(function(){
// триангуляция
if($('#bg').length>0){
    // 
var refreshDuration = 10000;
var refreshTimeout;
var numPointsX;
var numPointsY;
var unitWidth;
var unitHeight;
var points;

function onLoad()
{
    var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.setAttribute('width',window.innerWidth);
    svg.setAttribute('height',window.innerHeight);
    document.querySelector('#bg').appendChild(svg);

    var unitSize = (window.innerWidth+window.innerHeight)/30;
    numPointsX = Math.ceil(window.innerWidth/unitSize)+1;
    numPointsY = Math.ceil(window.innerHeight/unitSize)+1;
    unitWidth = Math.ceil(window.innerWidth/(numPointsX-1));
    unitHeight = Math.ceil(window.innerHeight/(numPointsY-1));

    points = [];

    for(var y = 0; y < numPointsY; y++) {
        for(var x = 0; x < numPointsX; x++) {
            points.push({x:unitWidth*x, y:unitHeight*y, originX:unitWidth*x, originY:unitHeight*y});
        }
    }

    randomize();

    for(var i = 0; i < points.length; i++) {
        if(points[i].originX != unitWidth*(numPointsX-1) && points[i].originY != unitHeight*(numPointsY-1)) {
            var topLeftX = points[i].x;
            var topLeftY = points[i].y;
            var topRightX = points[i+1].x;
            var topRightY = points[i+1].y;
            var bottomLeftX = points[i+numPointsX].x;
            var bottomLeftY = points[i+numPointsX].y;
            var bottomRightX = points[i+numPointsX+1].x;
            var bottomRightY = points[i+numPointsX+1].y;

            var rando = Math.floor(Math.random()*2);

            for(var n = 0; n < 2; n++) {
                var polygon = document.createElementNS(svg.namespaceURI, 'polygon');

                if(rando==0) {
                    if(n==0) {
                        polygon.point1 = i;
                        polygon.point2 = i+numPointsX;
                        polygon.point3 = i+numPointsX+1;
                        polygon.setAttribute('points',topLeftX+','+topLeftY+' '+bottomLeftX+','+bottomLeftY+' '+bottomRightX+','+bottomRightY);
                    } else if(n==1) {
                        polygon.point1 = i;
                        polygon.point2 = i+1;
                        polygon.point3 = i+numPointsX+1;
                        polygon.setAttribute('points',topLeftX+','+topLeftY+' '+topRightX+','+topRightY+' '+bottomRightX+','+bottomRightY);
                    }
                } else if(rando==1) {
                    if(n==0) {
                        polygon.point1 = i;
                        polygon.point2 = i+numPointsX;
                        polygon.point3 = i+1;
                        polygon.setAttribute('points',topLeftX+','+topLeftY+' '+bottomLeftX+','+bottomLeftY+' '+topRightX+','+topRightY);
                    } else if(n==1) {
                        polygon.point1 = i+numPointsX;
                        polygon.point2 = i+1;
                        polygon.point3 = i+numPointsX+1;
                        polygon.setAttribute('points',bottomLeftX+','+bottomLeftY+' '+topRightX+','+topRightY+' '+bottomRightX+','+bottomRightY);
                    }
                }
                polygon.setAttribute('fill','rgba(0,0,0,'+(Math.random()/1)+')');
                var animate = document.createElementNS('http://www.w3.org/2000/svg','animate');
                animate.setAttribute('fill','freeze');
                animate.setAttribute('attributeName','points');
                animate.setAttribute('dur',refreshDuration+'ms');
                animate.setAttribute('calcMode','linear');
                polygon.appendChild(animate);
                svg.appendChild(polygon);
            }
        }
    }

    refresh();

}

function randomize() {
    for(var i = 0; i < points.length; i++) {
        if(points[i].originX != 0 && points[i].originX != unitWidth*(numPointsX-1)) {
            points[i].x = points[i].originX + Math.random()*unitWidth-unitWidth/2;
        }
        if(points[i].originY != 0 && points[i].originY != unitHeight*(numPointsY-1)) {
            points[i].y = points[i].originY + Math.random()*unitHeight-unitHeight/2;
        }
    }
}

function refresh() {
    randomize();
    for(var i = 0; i < document.querySelector('#bg svg').childNodes.length; i++) {
        var polygon = document.querySelector('#bg svg').childNodes[i];
        var animate = polygon.childNodes[0];
        if(animate.getAttribute('to')) {
            animate.setAttribute('from',animate.getAttribute('to'));
        }
        animate.setAttribute('to',points[polygon.point1].x+','+points[polygon.point1].y+' '+points[polygon.point2].x+','+points[polygon.point2].y+' '+points[polygon.point3].x+','+points[polygon.point3].y);
        animate.beginElement();
    }
    refreshTimeout = setTimeout(function() {refresh();}, refreshDuration);
}

function onResize() {
    document.querySelector('#bg svg').remove();
    clearTimeout(refreshTimeout);
    onLoad();
}

window.onload = onLoad;
window.onresize = onResize;
// 
};
//функция адаптивного меню
    var gamburger = $('.menu_block_gamburger');  
    var menu = $('.top_menu'); 

    gamburger.on('click', function(){
        menu.toggleClass('top_menu_active');
        menu.on('click', function(){
            menu.removeClass('top_menu_active');
        })
    });
});

// Наведение на портфолио
$('.portfolio_block').mouseenter(function(){
    $(this).children('.portfolio_block_info').toggleClass('portfolio_block_info_hover');
}).mouseleave(function(){
    $(this).children('.portfolio_block_info').toggleClass('portfolio_block_info_hover');
});
// Наведение на услугу
$('.service_block').mouseenter(function(){
    $(this).children('.service_block_defolte').css('display', 'none');
    $(this).children('.service_block_hover').css('display', 'block');
}).mouseleave(function(){
    $(this).children('.service_block_defolte').css('display', 'block');
    $(this).children('.service_block_hover').css('display', 'none');
});
// application_window (модальное окно "отправить заявку")
 $('.application_window_button').on('click', function(){
    $('.application_window').toggleClass('application_window_active');
    $('.application_window_wrapper').show();
    $('.application_window_wrapper').on('click', function(){
        $('.application_window').removeClass('application_window_active');
        setTimeout(function(){
            $('.application_window_wrapper').hide();
        },800);
    });
 });
 // fidback_window (модальное окно "обратная связь")
 $('.fidback_button').on('click', function(){
    $('.fidback_window').toggleClass('fidback_window_active');
    $('.application_window_wrapper').show();
    $('.application_window_wrapper').on('click', function(){
        $('.fidback_window').removeClass('fidback_window_active');
        setTimeout(function(){
            $('.application_window_wrapper').hide();
        },800);
    });
 });
 // Прокрутка в низ по нажатии на кнопку(стрелку)
  $('a[href*="#"]').on('click', function(){
     // event.preventDefault();
     var myScroll = $(this).attr('href');
     var myScrollBlock = $(myScroll).offset().top;
    $('body,html').animate({scrollTop: myScrollBlock},1000);
  });
// Появление логотипа
var logoHeaderL = $('.logo_header_h1');
var logoHeaderR = $('.logo_header_h2');
var logoHeaderC = $('.logo_header hr');

setTimeout (function(){
logoHeaderL.delay(300).addClass('logo_header_h1_active');
logoHeaderR.delay(300).addClass('logo_header_h2_active');
}, 1000);
setTimeout (function(){
logoHeaderC.delay(300).addClass('logo_header_hr_active');
}, 3000);
// faq (аккордеон)
// $('.faq_block').on('click', function(){
//     $(this).children('.faq_content').children('.faq_content_text').toggleClass('faq_content_active');
// });
$('.faq_block').on('click', function(){
    $(this).children('.faq_content').slideToggle(2000).toggleClass('faq_content_active');
});
// при наведении на этапы работы замена в service 
$('.stages_work_block').mouseenter(function(){
    $(this).find('.name_stage').css('display', 'none');
    $(this).find('.stages_work_content ul').css('display', 'block');
}).mouseleave(function(){
    $(this).find('.name_stage').css('display', 'block');
    $(this).find('.stages_work_content ul').css('display', 'none');
});

// Появление на главное триангуляции при прокрутке
if($('.service').length>0){
$(window).scroll(function(event){
        var triangul = $('.service').offset().top;
        var tops = $(this).scrollTop();
        var all = triangul - 300;

        if(tops >= all ){
            $('.service_after').css('top', '-170');
        }
    });
}
// появление контактного блока при прокрутке
if($('.contackts').length>0){
    $(window).scroll(function(event){
        var contactBlocks = $('.contackts').offset().top;
        var top = $(this).scrollTop();
        var allScrollContact = contactBlocks - 200;

        if(top >= allScrollContact ){
            $('.contackts_block').removeClass('contackts_block_toggle');
        }
    });
}




