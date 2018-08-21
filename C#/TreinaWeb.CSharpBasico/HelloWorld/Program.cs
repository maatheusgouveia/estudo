using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HelloWorld
{
    class Program
    {
        static void Main(string[] args)
        {
            //Console.WriteLine("Hello World");
            //Console.Read();

            //inferência

            var inteiro1 = 4;
            var nome = "clebinho";
            Console.WriteLine("inteiro1 = {0}, nome = {1} ", inteiro1, nome);
            dynamic variavel = 2;
            Console.WriteLine("variavel dinamica = {0}", variavel);
            variavel = "clebinho";
            Console.WriteLine("variavel dinamica = {0}", variavel);
            Console.Read();
        }
    }
}
