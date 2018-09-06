package br.com.matheusgouveia.aulajavaintro;
import java.util.Scanner;

public class AulaJavaIntro {
    
    public static void main(String[] args) {
        /*String nome = null;
        int idade = 0;
        
        Scanner scnome = new Scanner(System.in);
        Scanner scidade = new Scanner(System.in);
        
        System.out.println("Digite seu nome: ");
        nome = scnome.nextLine();
        System.out.println("Digite sua idade: ");
        idade = scidade.nextInt();
        
        System.out.println("O meu nome é " + nome + " e eu tenho " + idade + " anos"); */
        
        int n1, n2, soma;
        
        Scanner scn1 = new Scanner(System.in);
        Scanner scn2 = new Scanner(System.in);
        
        System.out.println("Digite o primeiro número: ");
        n1 = scn1.nextInt();
        System.out.println("Digite o segundo número");
        n2 = scn2.nextInt();
        soma = n1+n2;
        System.out.println("O resultado é: " + soma);
        
    }
    
}
