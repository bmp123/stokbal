$("#loading-login-btn").click(function (){
    var loginIn = $("#loginIn").val(),
        PassIn  = $("#passIn").val(),
        btn = $("#loading-login-btn");

        btn.button('loading');
    $.ajax({
        type : 'POST',
        url : 'assets/Classes/LoginClass.php',
        data : {login:loginIn,password:PassIn},
        success : function(data) {
            btn.button('reset');
            if (data == 1) {       
                $('#Modal-Body p').removeClass("text-danger bg-danger").addClass("text-success bg-success text-center").css({'padding':'10px','margin-top':'5px'}).text("Вы удачно вошли");

            }
            if(data != 1){
                $('#Modal-Body p').removeClass("text-success bg-success").addClass("text-danger bg-danger text-center").css({'padding':'10px','margin-top':'5px'}).text(data);
            }
        }   
    });
});
$("#Reg").click(function (){
    var loginIn = $("#loginIn").val(),
        PassIn  = $("#passIn").val();
    $.ajax({
        type : 'POST',
        url : 'assets/Classes/RegistrClass.php',
        data : {login:loginIn,password:PassIn},
        success : function(data) {
            if (data == 1) {            
                $('#myModalLabel').text("lalala");
            }
            if(data != 1){
                $('#myModalLabel').text(data);
            }

        }
    });
});

$("#search-btn").click(function (){
    var search = $("#search-inp").val();

    window.location.replace ("?view=search&&search="+search);
    
});

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}