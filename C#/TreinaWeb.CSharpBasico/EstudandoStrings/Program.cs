using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EstudandoStrings
{
    class Program
    {
        static void Main(string[] args)
        {
            /*string string1 = "ABC";
            string string2 = "DEF";
            Console.WriteLine("{0}", string1 + " " + string2 + "GHI");
            //Forma que gasta mais processamento */

            string string1 = "ABC";
            string string2 = "DEF";
            StringBuilder sb = new StringBuilder();
            sb.Append(string1);
            sb.Append(" ");
            sb.Append(string2);
            sb.Append(" ");
            sb.Append("GHI");

            Console.WriteLine("{0}", sb.ToString());

            Console.Read();
        }
    }
}
