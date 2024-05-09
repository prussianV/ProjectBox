var botao = document.getElementById('button');
botao.addEventListener('click',function(){

    var numArm = document.getElementById('armPag').value
    var formaPagamento = document.querySelector ('#formaPag option:checked').value
    var dataPagamento = document.getElementById('dataPag').value
    var validadePagamento = document.getElementById('validadePag').value
    var comprovante = document.getElementById('comprovantePag').value    


    alert(numArm)
    alert(formaPagamento)
    alert(dataPagamento)
    alert(validadePagamento)
    alert(comprovante)

});