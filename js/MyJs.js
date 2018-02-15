$(document).ready(function() {
    var more=$("#restante");
    var botao=$("#repButt");
    var estado=true;
    var xt=$("#butt");
    var menu = $("#itens");
    var resp = false;
    var wid = $(window).width();
    var hei = $(window).height();
    var widAn = wid;
    var heiAn = hei;
    console.log("ok");
    botao.click(function () {
        more.toggle("see2");
        if(estado){
            botao.text("Ver Menos...");
            estado=false;
        }
        else{
            botao.text("Ver Mais...");
            estado=true;
        }
    });

    xt.click(function () {
        console.log("click");
        menu.slideToggle("slow");
    });

    function verificPos(){
        var scroll = $(document).scrollTop() + $("#navbar").height();
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();
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
        else if(($("#extras").position().top <= scroll) && ((scrollHeight - scrollPosition) / scrollHeight !== 0)){//($("#extras").position().top <= scroll) && ($(document).height() - ($("#contato").height() + $(".footer").height())/2) > scroll + $(window).height()
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
        if($("#xtudo").is( ":hidden" )){
            menu.show();
            resp = false;
        }
        else{
            menu.hide();
            resp = true;
        }
    }

    verificaRes();
    setInterval(function(){
        wid = $(window).width();
        hei = $(window).height();
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