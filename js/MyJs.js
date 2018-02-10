$(document).ready(function() {
    // var more=$("#more");
    // var botao=$("#botao");
    // var estado=0;
    var xt=$("#butt");
    var menu = $("#itens");
    var resp = false;
    var wid = $(window).width();
    var hei = $(window).height();
    var widAn = wid;
    var heiAn = hei;
    // console.log("ok");
    // botao.click(function () {
    //     console.log("ok2");
    //     more.toggle("see2");
    //     if(estado==0){
    //         botao.text("Ver Menos...");
    //         estado=1;
    //     }
    //     else{
    //         botao.text("Ver Mais...");
    //         estado=0;
    //     }
    // });

    xt.click(function () {
        console.log("click");
        menu.slideToggle("slow");
    });

    function verificPos(){
        var scroll = $(document).scrollTop() + $("#navbar").height();
        if($("#repositorio").position().top > scroll){
            $("#hom").addClass("select");
            $("#repos").removeClass("select");
            $("#cont").removeClass("select");
            $("#ext").removeClass("select");
        }
        else if(($("#repositorio").position().top <= scroll) && ($("#extras").position().top > scroll)){
            $("#hom").removeClass("select");
            $("#repos").addClass("select");
            $("#cont").removeClass("select");
            $("#ext").removeClass("select");
        }
        else if(($("#extras").position().top <= scroll) && (scroll < $("body").height())){
            $("#hom").removeClass("select");
            $("#repos").removeClass("select");
            $("#cont").removeClass("select");
            $("#ext").addClass("select");
        }
        else{
            $("#hom").removeClass("select");
            $("#repos").removeClass("select");
            $("#cont").addClass("select");
            $("#ext").removeClass("select");
        }
    }
    $(document).on( 'scroll', function(){
        verificPos();
    });
    verificPos();
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });

    function verificaRes(){
        if(wid >= hei){
            menu.show();
            console.log("show");
            resp = false;
        }
        else{
            menu.hide();
            console.log("hide");
            resp = true;
        }
    }

    verificaRes();
    setInterval(function(){
        wid = $(window).width();
        hei = $(window).height();
        console.log("wid"+wid);
        console.log("hei"+hei);
        if((wid!=widAn)||(hei!=heiAn)){
            verificaRes();
            widAn=wid;
            heiAn=hei;
        }
    },10);

    menu.click(function () {
        if(resp){
            menu.slideToggle("fast");
        }
    });


});