// remove messages after 10  seconds
$("document").ready(function (){
    setTimeout(function (){
        $("div.alert-disappear").remove()
    }, 10000);
})
