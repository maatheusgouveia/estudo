using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BoxingVsUnboxing
{
    class Program
    {
        static void Main(string[] args)
        {
            //Boxing
            int inteiro1 = 2;
            object objeto1 = inteiro1;
            //Console.WriteLine("object = {0}", objeto1);
            //Console.Read();

            //Unboxing
            int inteiro2 = (int)objeto1;
            Console.WriteLine("inteiro2 = {0}", inteiro2);
            Console.Read();
        }
    }
}
