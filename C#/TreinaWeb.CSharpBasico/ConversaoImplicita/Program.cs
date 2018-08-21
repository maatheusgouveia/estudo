using System;

class ConversaoImplicita
{
    public static void Main()
    {
        long x;
        int y = 5;
        x = y;
        //Aparece a conversão do valor 5 para long
        Console.WriteLine("O valor 5 em long é " + x);
        Console.Read();
    }
}