#include<stdio.h>

void main()
{
    int Escolha;

Retorno:
    printf("\n\n\n\n");
    Menu();

        do{
printf("Digite um numero inteiro valido");
            scanf("%i",&Escolha);

        }while(Escolha > 5);


        switch(Escolha)
        {

        case 0:
            printf("\nTchau\n");
            exit(1);
            break;

        case 1:
            printf("\nEscolha dois numeros para a soma\n");
            Soma();
            goto Retorno;
            break;

        case 2:
            printf("\nEscolha dois numeros para a subtracao\n");
            Subtracao();
            goto Retorno;
            break;

        case 3:
            printf("\nEscolha dois numeros para a divisao\n");
            Divisao();
            goto Retorno;
            break;

        case 4:
            printf("\nEscolha dois numeros para a multiplicacao\n");
            Multiplicacao();
            goto Retorno;
            break;

        case 5:
            printf("\nEscolha dois numeros para calcular a area\n");
            Area();
            goto Retorno;
            break;

        default:
            printf("Escolha uma opcao valida");
            goto Retorno;
            break;
        }

}

void Menu()
{
    int i;

    for(i=0; i<30; i++)
    {
       printf("=");
    }

    printf("\n\nEscolha uma das opcoes abaixo:\n\n");

    printf("(1) Soma:\n");
    printf("(2) Subtracao:\n");
    printf("(3) Divisao:\n");
    printf("(4) Multiplicacao:\n");
    printf("(5) Area do Triangulo:\n\n");

    for(i=0; i<30; i++)
    {
       printf("=");
    }
}

void Soma()
{
    int x,y;
    scanf("%i",&x);
    scanf("%i",&y);

    int Resultado = x+y;
    printf("\nA Soma entre os dois numeros e : %i\n\n",Resultado);

}

void Subtracao()
{
    int x,y;
    scanf("%i",&x);
    scanf("%i",&y);

    int Resultado = x-y;
    printf("\nA Subtracao entre os dois numeros e : %i\n\n",Resultado);
}

void Divisao()
{
    int x,y;
    scanf("%i",&x);
    scanf("%i",&y);


    if(y != 0)
    {
        float Resultado = (float)x/y;
        printf("\nA Divisao entre os dois numeros e : %.4f\n\n",Resultado);
    }else{

        printf("Nao se pode dividir por 0");


    }


}

void Multiplicacao()
{
    int x,y;
    scanf("%i",&x);
    scanf("%i",&y);


        float Resultado = (float)x*y;
        printf("\nA Multiplicacao entre os dois numeros e : %.4f\n\n",Resultado);


    }

void Area()
{
    int x,y;
    scanf("%i",&x);
    scanf("%i",&y);


        float Resultado = (float)(x*y)/2;
        printf("\nA area do triangulo e : %.4f\n\n",Resultado);


    }
