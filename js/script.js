var quad = document.getElementsByClassName("quad")

// Colocando a caixa já selecionada
localGet = localStorage.getItem('armarioEscolhido')

if (localGet) {
    if(quad[localGet-1].classList.contains('selecionado')){
        
    }
    else{
    quad[localGet-1].classList.add('selecionado')
    }
}







for (i = 0; i < quad.length; i++) {
    quad[i].addEventListener('click', function () {

        var elementosSelecionado = document.querySelectorAll('.selecionado');
        var qtdselecionado = elementosSelecionado.length;
   
         if (this.classList.contains('selecionado')) {

            this.classList.remove('selecionado');

        }
        else if (this.classList.contains('reservado')) {
            alert("Este armario já esta reservado")
        }
        else if (this.classList.contains('ocupado')) {
            alert("Este armario já esta ocupado")
        }
        else if(qtdselecionado > 0){
        
            alert("Já tem um armario selecionado")

        }
        else {
            this.classList.add('selecionado');
        }
    });
}


function SalvarAluno(){

    try{
        var armSelect = document.querySelectorAll('.selecionado');
        var armNum = armSelect[0].textContent
        alert(armNum)
        localStorage.setItem('armarioEscolhido',armNum)
        window.location.href = 'salvarArmario.html'    
    }catch(erro){

        alert("Armario não selecionado!!")

    }
}



