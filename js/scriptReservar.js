localGet = localStorage.getItem('armarioEscolhido')
document.getElementById('resposta').innerText = "Armario escolhido: "+ localGet

function Enviar(){

var rm = document.getElementById('rmCad').value
var nome = document.getElementById('nomeCad').value
var turma = document.querySelector('#turmaCad option:checked').value
var email = document.getElementById('emailCad').value
var tamanho = document.querySelector('#tamanhoCad option:checked').value

$.ajax({
    url: "sistem/reservar.php",
    type: "POST",
    data: "&nomeCad="+nome+"&emailCad="+email+"&turmaCad="+turma+"&rmCad="+rm+"&armarioCad="+localGet+"&tamanhoCad="+tamanho,
    dataType: "html"


}).done(function(response) {
    console.log(response);      
}).fail(function(jqXHR,textStatus){
    console.log("request failed: "+textStatus);

}).always(function(){
    console.log("Funcionou");
    localGet = localStorage.removeItem('armarioEscolhido')

});




}
    

