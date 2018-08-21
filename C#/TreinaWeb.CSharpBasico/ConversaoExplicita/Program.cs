using System;

class ConversaoExplicita
{
    public static void Main()
    {
        int i;
        double y = 10.5;
        i = (int)y;
        /*Aparece a conversão do valor 10.5 em inteiro, nesse caso, 10.
        A parte decimal é desprezada, já que o tipo de dado  int não suporta pontos
        decimais   */
        Console.WriteLine("O valor 10.5 em inteiro é " + i);
        Console.Read();
    }
}