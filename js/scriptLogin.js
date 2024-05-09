function Login(){

    var user = document.getElementById('userLog').value
    var senha = document.getElementById('senhaLog').value

    
    $.ajax({
        url: "sistem/login.php",
        type: "POST",
        data: "&userLog="+user+"&senhaLog="+senha,
        dataType: "html"


    }).done(function(response) {
        $("#resposta").html(response);

    }).fail(function(jqXHR,textStatus){
        console.log("request failed: "+textStatus);

    }).always(function(){
        console.log("completou");
    });



}