var testSecond = 0;
function slideFirstSecond(){
    $('.first-second').on('click',function(){
        $('.first-item').css('display', 'none');
        $('.second-item').css('display', 'block');
        testSecond = 1;
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
function textLeftAppear(){
    $('.slide-left-right-first').css('transform', 'translateX(0%)');
}
function test(){
    if ( testSecond == 1){
        debugger;
        $('.slide-left-right-second').css('transform', 'translateX(0%)');
    }
}


$(document).ready(function(){
slideFirstSecond();
slideSecondThird();
slideThirdFirst();
slideFirstThird();
slideSecondFirst();
slideThirdSecond();
textLeftAppear();
test();
console.log(testSecond);
});