using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ValueTypeVsReferenceType
{
    class Program
    {
        static void Main(string[] args)
        {
            //Passagem por valor
            //int n1 = 3;
            //int n2 = n1;
            //n1 = 5;
            //Console.WriteLine("n1 = {0}, n2 = {1} ", n1, n2);
            //Console.Read();

            //Passagem por referência

            /*Teste teste1 = new Teste();
            teste1.Quantidade = 3;
            Teste teste2 = teste1;
            teste1.Quantidade = 5;
            Console.WriteLine("teste1.Quantidade = {0}, teste2.Quantidade = {1}", teste1.Quantidade, teste2.Quantidade);
            Console.Read(); */

            Teste teste1 = new Teste();
            teste1.testePai = new Teste();
            teste1.Quantidade = 3;
            teste1.testePai.Quantidade = 6;
            Console.WriteLine("Quantidade é {0}", teste1.Quantidade);
            Console.WriteLine("Quantidade do testePai é {0}", teste1.testePai.Quantidade);
            Console.Read();
        }
    }

    class Teste
    {
        public int Quantidade;
        public Teste testePai;
    }
}
