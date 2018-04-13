// TEXTE SLIDE ON RIGHT//
function textSlideOneTwo(){
    $('.slide-left-right-second').css('transform', 'translateX(0%)');
    $('.slide-left-right-first').css('transform', 'translateX(-200%)');
    $('.slide-right-left-second').css('transform', 'translateX(0%)');
    $('.slide-right-left-first').css('transform', 'translateX(200%)');
}
function textSlideOneTwoTimer(){
    $('.first-second').on('click', function(){
        setTimeout(textSlideOneTwo, 1);
    })
}
function textSlideTwoThree(){
    $('.slide-left-right-third').css('transform', 'translateX(0%)');
    $('.slide-left-right-second').css('transform', 'translateX(-200%)');
    $('.slide-right-left-third').css('transform', 'translateX(0%)');
    $('.slide-right-left-second').css('transform', 'translateX(200%)');
}
function textSlideTwoThreeTimer(){
    $('.second-third').on('click', function(){
        setTimeout(textSlideTwoThree, 1);
    })
}
function textSlideThreeOne(){
    $('.slide-left-right-first').css('transform', 'translateX(0%)');
    $('.slide-left-right-third').css('transform', 'translateX(-200%)');
    $('.slide-right-left-first').css('transform', 'translateX(0%)');
    $('.slide-right-left-third').css('transform', 'translateX(200%)');
}
function textSlideThreeOneTimer(){
    $('.third-first').on('click', function(){
        setTimeout(textSlideThreeOne, 1);
    })
}
////////////////////////

// TEXTE SLIDE ON LEFT //
function textSlideThreeTwo(){
    $('.slide-left-right-second').css('transform', 'translateX(0%)');
    $('.slide-left-right-third').css('transform', 'translateX(-200%)');
    $('.slide-right-left-second').css('transform', 'translateX(0%)');
    $('.slide-right-left-third').css('transform', 'translateX(200%)');
}
function textSlideThreeTwoTimer(){
    $('.third-second').on('click', function(){
        setTimeout(textSlideThreeTwo, 1);
    })
}
function textSlideTwoOne(){
    $('.slide-left-right-first').css('transform', 'translateX(0%)');
    $('.slide-left-right-second').css('transform', 'translateX(-200%)');
    $('.slide-right-left-first').css('transform', 'translateX(0%)');
    $('.slide-right-left-second').css('transform', 'translateX(200%)');
}
function textSlideTwoOneTimer(){
    $('.second-first').on('click', function(){
        setTimeout(textSlideTwoOne, 1);
    })
}
function textSlideOneThree(){
    $('.slide-left-right-third').css('transform', 'translateX(0%)');
    $('.slide-left-right-first').css('transform', 'translateX(-200%)');
    $('.slide-right-left-third').css('transform', 'translateX(0%)');
    $('.slide-right-left-first').css('transform', 'translateX(200%)');
}
function textSlideOneThreeTimer(){
    $('.first-third').on('click', function(){
        setTimeout(textSlideOneThree, 1);
    })
}


////////////////////////

function slideFirstSecond(){
    $('.first-second').on('click',function(){
        $('.first-item').css('display', 'none');
        $('.second-item').css('display', 'block');
    })
}
function slideSecondThird(){
    $('.second-third').on('click',function(){
        $('.second-item').css('display', 'none');
        $('.third-item').css('display', 'block');
    })
}
function slideThirdFirst(){
    $('.third-first').on('click',function(){
        $('.third-item').css('display', 'none');
        $('.first-item').css('display', 'block');
    })
}
function slideFirstThird() {
    $('.first-third').on('click', function () {
        $('.first-item').css('display', 'none');
        $('.third-item').css('display', 'block');
    })
}
function slideSecondFirst(){
        $('.second-first').on('click',function(){
            $('.second-item').css('display', 'none');
            $('.first-item').css('display', 'block');
        })
}
function slideThirdSecond(){
    $('.third-second').on('click',function(){
            $('.third-item').css('display', 'none');
            $('.second-item').css('display', 'block');
        })
}


$(document).ready(function(){
    $('.slide-left-right-first').css('transform', 'translateX(0%)');
    $('.slide-right-left-first').css('transform', 'translateX(0%)');
    slideFirstSecond();
    slideSecondThird();
    slideThirdFirst();
    slideFirstThird();
    slideSecondFirst();
    slideThirdSecond();
    textSlideOneTwoTimer();
    textSlideTwoThreeTimer();
    textSlideThreeOneTimer();
    textSlideThreeTwoTimer();
    textSlideTwoOneTimer();
    textSlideOneThreeTimer();
});