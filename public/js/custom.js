// remove messages after 10  seconds
$(function(){
    setTimeout(function(){
        $(".alert-disappear").fadeOut(1500);
    }, 10000); // 10 sec
});

