$( document ).ready(function() {
    //localStorage.clear('18');
    $('.bloker_yes').click(function (){
        localStorage.setItem('18', 'true');
        $('#bloker').removeClass("bloced_block");
        $(body).removeClass("bloced_stop_scroll");
    });
    if(!localStorage.getItem('18')){

        $('#bloker').addClass("bloced_block");
        $(body).addClass("bloced_stop_scroll");
    }
});

