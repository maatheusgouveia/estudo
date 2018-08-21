package br.com.matheusgouveia.helloworld.principal;

public class Principal {

  public static void main(String[] args) {
    int x1 = 20;
    int x2 = 15;
    int r1 = 0;
    int r2 = 0;
    String b1= "";
    String b2 = "";

    System.out.println("x: " + x1);
    b1 = Integer.toBinaryString(x1);
    System.out.println("b: " + b1);
    System.out.println("Conferindo: " + Integer.parseInt(b1,2));
    System.out.println("--------");

    System.out.println("x: " + x2);
    b2 = Integer.toBinaryString(x2);
    System.out.println("b: " + b2);
    System.out.println("Conferindo: " + Integer.parseInt(b2,2));
    System.out.println("--------");

    r1 = x1 & x2; //10100 & 1111 = 00100
    System.out.println("b: " + r1);
    System.out.println("Conferindo: " + Integer.parseInt("00100",2));
    System.out.println("--------");

    r2 = x1 | x2; //10100 | 1111 = 11111
    System.out.println("b: " + r2);
    System.out.println("Conferindo: " + Integer.parseInt("11111",2));
    System.out.println("--------");

    r2 = x1 ^ x2; //10100 ^ 1111 = 11011
    System.out.println("b: " + r2);
    System.out.println("Conferindo: " + Integer.parseInt("11011",2));
    System.out.println("--------");

    r1 = ~x1;
    System.out.println(Integer.toBinaryString(x2));
    System.out.println("r1: " + r1);
    System.out.println("--------");
  }

}