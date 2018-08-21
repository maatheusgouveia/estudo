/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package testetipos;

/**
 *
 * @author mathe
 */
public class TesteTipos {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        //int idade = 20;
        //String valor = Integer.toString(idade);
        //System.out.println(idade);
        
        String valor = "30.5";
        float idade = Float.parseFloat(valor);
        System.out.printf("idade é %f", idade);
    }
    
}
