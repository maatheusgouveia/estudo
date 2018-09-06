function calcular(){
    n1 = document.getElementById("n1").value;
    n2 = document.getElementById("n2").value;
    operacao = document.getElementById("operacao").value;

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
    document.getElementById("resultado").innerHTML = resultado;
}