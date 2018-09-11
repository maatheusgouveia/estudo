function calcular(){
    var n1 = document.getElementById("n1").value;
    var n2 = document.getElementById("n2").value;
    var operacao = document.getElementById("operacao").value;
    
    if(n1 != "" && n2 != "" && operacao != ""){

        switch(operacao){
            case 'adicao':
                resultado = parseInt(n1) + parseInt(n2);
                break;
            case 'subtracao':
                resultado = n1 - n2;
                break;
            case 'multiplicacao':
                resultado = n1 * n2;
                break;
            case 'divisao':
                resultado = n1 / n2;
                break;

        }

    document.getElementById("resultado").value = resultado;
    } 
    else{

        var retornon1 = document.getElementById("retornon1");
        var retornon2 = document.getElementById("retornon2");
        var retornoop = document.getElementById("retornoop");

        if(n1 == ""){
            retornon1.innerHTML = "Preencha este campo";
        }
        else{
            retornon1.innerHTML = "";
        }
        if(n2 == ""){
            retornon2.innerHTML = "Preencha este campo";
        }
        else{
            retornon2.innerHTML = "";
        }
        if(operacao == ""){
            retornoop.innerHTML = "Preencha este campo";
        }
        else{
            retornoop.innerHTML = "";
        }
    }
}