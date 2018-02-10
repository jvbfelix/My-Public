$(document).ready(function() {
    // var more=$("#more");
    // var botao=$("#botao");
    // var estado=0;
    var xt = $("#xtudo");
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

    xt.on('click',function () {
        console.log("click");
        $("#itens").toggleClass("disp");
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

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800);
    });


});