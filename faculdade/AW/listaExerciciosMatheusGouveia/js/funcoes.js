function ex1(){
    saldoM = document.getElementById('salarioM').value;
    if(saldoM <= 200){
        credito = 0;
    }
    else if(saldoM > 200 && saldoM <= 400){
        credito = 0.2;
    }
    else if(saldoM > 400 && saldoM <= 600){
        credito = 0.3;
    }
    else{
        credito = 0.4;
    }
    document.getElementById('resultado1').innerHTML = "Seu crédito é " + saldoM * credito;
}

function ex2(){
    var codCargo = document.getElementById('codCargo').value;
    var salario = document.getElementById('salario').value;
    if (codCargo === 101) {
        reajuste = 0.1;
    }
    else if(codCargo === 102){
        reajuste = 0.2;
    }
    else if(codCargo === 103){
        reajuste = 0.3;
    }
    else{
        reajuste = 0.4;
    }
    var salarioReajuste = (salario * reajuste) + salario;
    document.getElementById('resultado2').innerHTML = "Seu salário atual é "+salario+", e seu salário com aumento é " +salarioReajuste;
}

function ex3(){
    
}

function ex4(){
    
}