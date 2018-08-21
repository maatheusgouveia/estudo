using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] meuVetor = new int[10];

            for (int i = 0; i <= 9; i++)
            {
                meuVetor[i] = i + 1;
            }

            /* for (int i = 0; i <= 9; i++)
            {
                Console.WriteLine("Posição {0} = {1}", i, meuVetor[i]);
            }
            Console.ReadKey(); */

            foreach(int numero in meuVetor)
            {
                Console.WriteLine("{0}", numero);
            }
            Console.ReadKey();
        }
    }
}
