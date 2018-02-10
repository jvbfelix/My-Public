$(document).ready(function() {
    var more=$("#more");
    var botao=$("#botao");
    var estado=0;
    console.log("ok");
    botao.click(function () {
        console.log("ok2");
        more.toggle("see2");
        if(estado==0){
            botao.text("Ver Menos...");
            estado=1;
        }
        else{
            botao.text("Ver Mais...");
            estado=0;
        }
    });
    var fb=$("#fb");
    var fb2=$("#fb2");
    var gh=$("#gh");
    var gh2=$("#gh2");
    var insta=$("#insta");
    var insta2=$("#insta2");
    var lin=$("#lin");
    var lin2=$("#lin2");
    var mail=$("#mail");
    var mail2=$("#mail2");
    var tel=$("#tel");
    var tel2=$("#tel2");
    var stm=$("#stm");
    var stm2=$("#stm2");
    var yt=$("#yt");
    var yt2=$("#yt2");
    var tin=$("#tin");
    var tin2=$("#tin2");
    console.log("ok6");
    fb.hover(function(){
        console.log("ok");
        fb2.removeClass("see");
    },function(){
        fb2.addClass('see');
    });
    gh.hover(function(){
        console.log("ok");
        gh2.removeClass("see");
    },function(){
        gh2.addClass('see');
    });
    insta.hover(function(){
        console.log("ok");
        insta2.removeClass("see");
    },function(){
        insta2.addClass('see');
    });
    lin.hover(function(){
        console.log("ok");
        lin2.removeClass("see");
    },function(){
        lin2.addClass('see');
    });
    mail.hover(function(){
        console.log("ok");
        mail2.removeClass("see");
    },function(){
        mail2.addClass('see');
    });
    tel.hover(function(){
        console.log("ok");
        tel2.removeClass("see");
    },function(){
        tel2.addClass('see');
    });
    stm.hover(function(){
        console.log("ok");
        stm2.removeClass("see");
    },function(){
        stm2.addClass('see');
    });
    yt.hover(function(){
        console.log("ok");
        yt2.removeClass("see");
    },function(){
        yt2.addClass('see');
    });
    tin.hover(function(){
        console.log("ok");
        tin2.removeClass("see");
    },function(){
        tin2.addClass('see');
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
        else if(($("#extras").position().top <= scroll) && (scroll !== $(document).height()+ $("#navbar").height())){
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

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        verificPos();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });

    $("body").onscroll(verificPos());

});